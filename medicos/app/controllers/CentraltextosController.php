<?php

class CentraltextosController extends BaseController {

	/**
	 * Centraltexto Repository
	 *
	 * @var Centraltexto
	 */
	protected $centraltexto;

	public function __construct(Centraltexto $centraltexto)
	{
		$this->centraltexto = $centraltexto;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$centraltextos = $this->centraltexto->all();

		return View::make('centraltextos.index', compact('centraltextos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('centraltextos.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Centraltexto::$rules);

		if ($validation->passes())
		{
			$this->centraltexto->create($input);

			return Redirect::route('centraltextos.index');
		}

		return Redirect::route('centraltextos.create')
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
		$centraltexto = $this->centraltexto->findOrFail($id);

		return View::make('centraltextos.show', compact('centraltexto'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$centraltexto = $this->centraltexto->find($id);

		if (is_null($centraltexto))
		{
			return Redirect::route('centraltextos.index');
		}

		return View::make('centraltextos.edit', compact('centraltexto'));
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
		$validation = Validator::make($input, Centraltexto::$rules);

		if ($validation->passes())
		{
			$centraltexto = $this->centraltexto->find($id);
			$centraltexto->update($input);

			return Redirect::route('centraltextos.show', $id);
		}

		return Redirect::route('centraltextos.edit', $id)
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
		$this->centraltexto->find($id)->delete();

		return Redirect::route('centraltextos.index');
	}

}
