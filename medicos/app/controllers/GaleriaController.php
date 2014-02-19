<?php

class GaleriaController extends BaseController {

	/**
	 * Galerium Repository
	 *
	 * @var Galerium
	 */
	protected $galerium;

	public function __construct(Galerium $galerium)
	{
		$this->galerium = $galerium;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$galeria = $this->galerium->all();

		return View::make('galeria.index', compact('galeria'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('galeria.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Galerium::$rules);

		if ($validation->passes())
		{
			$this->galerium->create($input);

			return Redirect::route('galeria.index');
		}

		return Redirect::route('galeria.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$galerium = $this->galerium->findOrFail($id);

		return View::make('galeria.show', compact('galerium'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$galerium = $this->galerium->find($id);

		if (is_null($galerium))
		{
			return Redirect::route('galeria.index');
		}

		return View::make('galeria.edit', compact('galerium'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Galerium::$rules);

		if ($validation->passes())
		{
			$galerium = $this->galerium->find($id);
			$galerium->update($input);

			return Redirect::route('galeria.show', $id);
		}

		return Redirect::route('galeria.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->galerium->find($id)->delete();

		return Redirect::route('galeria.index');
	}
        
        public function galeria_seccion()
        {
		$galeria = $this->galerium->all();
        $coleccion2 = Portada::all();
        $portada= ($coleccion2->find(1));
		return View::make('galeria.galeria_seccion', compact('galeria','portada'));
        }

}
