<?php

class WarehousesController extends \BaseController {

	/**
	 * Display a listing of warehouses
	 *
	 * @return Response
	 */
	public function index()
	{
		$warehouses = Warehouse::all();

		return View::make('warehouses.index', compact('warehouses'));
	}

	/**
	 * Show the form for creating a new warehouse
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('warehouses.create');
	}

	/**
	 * Store a newly created warehouse in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Warehouse::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Warehouse::create($data);

		return Redirect::route('warehouses.index');
	}

	/**
	 * Display the specified warehouse.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$warehouse = Warehouse::findOrFail($id);

		return View::make('warehouses.show', compact('warehouse'));
	}

	/**
	 * Show the form for editing the specified warehouse.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$warehouse = Warehouse::find($id);

		return View::make('warehouses.edit', compact('warehouse'));
	}

	/**
	 * Update the specified warehouse in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$warehouse = Warehouse::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Warehouse::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$warehouse->update($data);

		return Redirect::route('warehouses.index');
	}

	/**
	 * Remove the specified warehouse from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Warehouse::destroy($id);

		return Redirect::route('warehouses.index');
	}

}
