<?php

class WarehouseInoutsController extends \BaseController {

	/**
	 * Display a listing of warehouseinouts
	 *
	 * @return Response
	 */
	public function index()
	{
		$warehouseinouts = Warehouseinout::all();

		return View::make('warehouseinouts.index', compact('warehouseinouts'));
	}

	/**
	 * Show the form for creating a new warehouseinout
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('warehouseinouts.create');
	}

	/**
	 * Store a newly created warehouseinout in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Warehouseinout::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Warehouseinout::create($data);

		return Redirect::route('warehouseinouts.index');
	}

	/**
	 * Display the specified warehouseinout.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$warehouseinout = Warehouseinout::findOrFail($id);

		return View::make('warehouseinouts.show', compact('warehouseinout'));
	}

	/**
	 * Show the form for editing the specified warehouseinout.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$warehouseinout = Warehouseinout::find($id);

		return View::make('warehouseinouts.edit', compact('warehouseinout'));
	}

	/**
	 * Update the specified warehouseinout in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$warehouseinout = Warehouseinout::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Warehouseinout::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$warehouseinout->update($data);

		return Redirect::route('warehouseinouts.index');
	}

	/**
	 * Remove the specified warehouseinout from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Warehouseinout::destroy($id);

		return Redirect::route('warehouseinouts.index');
	}

}
