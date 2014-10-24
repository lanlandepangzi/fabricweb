<?php

class ManufactureDeliveriesController extends \BaseController {

	/**
	 * Display a listing of manufacturedeliveries
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturedeliveries = Manufacturedelivery::all();

		return View::make('manufacturedeliveries.index', compact('manufacturedeliveries'));
	}

	/**
	 * Show the form for creating a new manufacturedelivery
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manufacturedeliveries.create');
	}

	/**
	 * Store a newly created manufacturedelivery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manufacturedelivery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manufacturedelivery::create($data);

		return Redirect::route('manufacturedeliveries.index');
	}

	/**
	 * Display the specified manufacturedelivery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturedelivery = Manufacturedelivery::findOrFail($id);

		return View::make('manufacturedeliveries.show', compact('manufacturedelivery'));
	}

	/**
	 * Show the form for editing the specified manufacturedelivery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturedelivery = Manufacturedelivery::find($id);

		return View::make('manufacturedeliveries.edit', compact('manufacturedelivery'));
	}

	/**
	 * Update the specified manufacturedelivery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacturedelivery = Manufacturedelivery::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manufacturedelivery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manufacturedelivery->update($data);

		return Redirect::route('manufacturedeliveries.index');
	}

	/**
	 * Remove the specified manufacturedelivery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacturedelivery::destroy($id);

		return Redirect::route('manufacturedeliveries.index');
	}

}
