<?php

class SuppliersController extends \BaseController {

	/**
	 * Display a listing of suppliers
	 *
	 * @return Response
	 */
	public function index()
	{
		$suppliers = Supplier::all();

		return View::make('suppliers.index', compact('suppliers'));
	}

	/**
	 * Show the form for creating a new supplier
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('suppliers.create');
	}

	/**
	 * Store a newly created supplier in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Supplier::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Supplier::create($data);

		return Redirect::route('suppliers.index');
	}

	/**
	 * Display the specified supplier.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$supplier = Supplier::findOrFail($id);

		return View::make('suppliers.show', compact('supplier'));
	}

	/**
	 * Show the form for editing the specified supplier.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$supplier = Supplier::find($id);

		return View::make('suppliers.edit', compact('supplier'));
	}

	/**
	 * Update the specified supplier in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$supplier = Supplier::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Supplier::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$supplier->update($data);

		return Redirect::route('suppliers.index');
	}

	/**
	 * Remove the specified supplier from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Supplier::destroy($id);

		return Redirect::route('suppliers.index');
	}

}
