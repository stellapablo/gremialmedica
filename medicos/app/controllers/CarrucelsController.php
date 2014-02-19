<?php

class CarrucelsController extends BaseController {

	/**
	 * Carrucel Repository
	 *
	 * @var Carrucel
	 */
	protected $carrucel;

	public function __construct(Carrucel $carrucel)
	{
		$this->carrucel = $carrucel;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$carrucels = $this->carrucel->all();

		return View::make('carrucels.index', compact('carrucels'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('carrucels.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Carrucel::$rules);

		if ($validation->passes())
		{
			$this->carrucel->create($input);

			return Redirect::route('carrucels.index');
		}

		return Redirect::route('carrucels.create')
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
		$carrucel = $this->carrucel->findOrFail($id);

		return View::make('carrucels.show', compact('carrucel'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$carrucel = $this->carrucel->find($id);

		if (is_null($carrucel))
		{
			return Redirect::route('carrucels.index');
		}

		return View::make('carrucels.edit', compact('carrucel'));
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
		$validation = Validator::make($input, Carrucel::$rules);

		if ($validation->passes())
		{
			$carrucel = $this->carrucel->find($id);
			$carrucel->update($input);

			return Redirect::route('carrucels.show', $id);
		}

		return Redirect::route('carrucels.edit', $id)
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
		$this->carrucel->find($id)->delete();

		return Redirect::route('carrucels.index');
	}

}
