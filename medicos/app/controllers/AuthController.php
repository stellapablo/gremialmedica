<?php

class AuthController extends BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    protected $user;

    public function doLogin() {
        $password = Input::get('password');
        if (isset($password)) {
            // Obtenemos el email, borramos los espacios
            // y convertimos todo a minúscula
            $email = mb_strtolower(trim(Input::get('email')));
            // Obtenemos la contraseña enviada
            $password = Input::get('password');

            // Realizamos la autenticación
            if (Auth::attempt(array('email' => $email, 'password' => $password))) {
                // Aquí también pueden devolver una llamada a otro controlador o
                // devolver una vista
                //return Redirect::action('PresupuestosController@calendario');
                return Redirect::action('AfiliadosController@index');
            }

            // La autenticación ha fallado re-direccionamos
            // a la página anterior con los datos enviados
            // y con un mensaje de error
            //dd(Input::all());
            return Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
            //return Redirect::to('/')->withInput(Input::old('email'));
        } else {
            return Redirect::back()->with('msg', 'Datos incorrectos, vuelve a intentarlo.');
        }
    }

    public function doLogout() {
        //Desconectamos al usuario
        Auth::logout();

        //Redireccionamos al inicio de la app con un mensaje
        return Redirect::to('acceso')->with('msg', 'Gracias por visitarnos!.');
    }

    public function create() {

        $roles = Rol::lists('descripcion', 'id');
        $roles = array(" " => "Rol") + $roles;

        return View::make('usuarios.create', compact('roles'));
    }

    public function check() {
        if (Auth::check()) {
            return View::make('calendario.calendario');
        } else {
            return View::make('usuarios.login');
        }
    }

    public function index() {
        
        $users = DB::table('usuarios')
                ->join('roles','roles.id','=','usuarios.rol_id')
                ->select('usuarios.id','usuarios.nick','usuarios.email','roles.descripcion','usuarios.created_at')->get();

        return View::make('usuarios.index', compact('users'));
    }

    public function store() {
        $input = Input::all();

        $validation = Validator::make($input, User::$rules);

        if ($validation->passes()) {
            $usuario = new User;
            $usuario->email = Input::get('email');
            $usuario->password = Hash::make(Input::get('password'));
            $usuario->nick = Input::get('nick');
            $usuario->rol_id = Input::get('rol_id');
            $usuario->save();

            return View::make('usuarios.create')->with('msg', 'Nuevo Usuario!.');
        }

        return Redirect::action('AuthController@create')
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'There were validation errors.');
    }

    public function edit($id) {
        $user = User::find($id);

        $roles = Rol::lists('descripcion', 'id');

        if (is_null($user)) {
            return Redirect::route('usuarios.index');
        }

        return View::make('usuarios.edit', compact('user', 'roles'));
    }

    public function update($id) {

        $input = Input::all();
        $validation = Validator::make($input, User::$rules);

        if ($validation->passes()) {
            
            $usuario = User::find($id);
            $usuario->nick = Input::get('nick');
            $usuario->email = Input::get('email');
            $usuario->password = Hash::make(Input::get('password'));
            $usuario->rol_id = Input::get('rol_id');
            $usuario->save();

            return Redirect::route('usuarios.index')->with('msg', 'Usuario actualizado!');
        }

        return Redirect::route('usuarios.edit', $id)
                        ->withInput()
                        ->withErrors($validation)
                        ->with('message', 'There were validation errors.');
    }
    
    public function dump(){
        $input = Input::all();
        var_dump($input);
    }

}
