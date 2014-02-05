<?php

class AfiliadosController extends BaseController {

	/**
	 * Afiliado Repository
	 *
	 * @var Afiliado
	 */
	protected $afiliado;

	public function __construct(Afiliado $afiliado)
	{
		$this->afiliado = $afiliado;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$afiliados = $this->afiliado->all();

		return View::make('afiliados.index', compact('afiliados'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('afiliados.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Afiliado::$rules);

		if ($validation->passes())
		{
			$this->afiliado->create($input);

			return Redirect::route('afiliados.index');
		}

		return Redirect::route('afiliados.create')
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
		$afiliado = $this->afiliado->findOrFail($id);

		return View::make('afiliados.show', compact('afiliado'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$afiliado = $this->afiliado->find($id);

		if (is_null($afiliado))
		{
			return Redirect::route('afiliados.index');
		}

		return View::make('afiliados.edit', compact('afiliado'));
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
		$validation = Validator::make($input, Afiliado::$rules);

		if ($validation->passes())
		{
			$afiliado = $this->afiliado->find($id);
			$afiliado->update($input);

			return Redirect::route('afiliados.index');
		}

		return Redirect::route('afiliados.edit', $id)
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
		$this->afiliado->find($id)->delete();

		return Redirect::route('afiliados.index');
	}

}
