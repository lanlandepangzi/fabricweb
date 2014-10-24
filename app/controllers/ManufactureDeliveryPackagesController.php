<?php

class ManufactureDeliveryPackagesController extends \BaseController {

	/**
	 * Display a listing of manufacturedeliverypackages
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturedeliverypackages = Manufacturedeliverypackage::all();

		return View::make('manufacturedeliverypackages.index', compact('manufacturedeliverypackages'));
	}

	/**
	 * Show the form for creating a new manufacturedeliverypackage
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manufacturedeliverypackages.create');
	}

	/**
	 * Store a newly created manufacturedeliverypackage in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manufacturedeliverypackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manufacturedeliverypackage::create($data);

		return Redirect::route('manufacturedeliverypackages.index');
	}

	/**
	 * Display the specified manufacturedeliverypackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturedeliverypackage = Manufacturedeliverypackage::findOrFail($id);

		return View::make('manufacturedeliverypackages.show', compact('manufacturedeliverypackage'));
	}

	/**
	 * Show the form for editing the specified manufacturedeliverypackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturedeliverypackage = Manufacturedeliverypackage::find($id);

		return View::make('manufacturedeliverypackages.edit', compact('manufacturedeliverypackage'));
	}

	/**
	 * Update the specified manufacturedeliverypackage in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacturedeliverypackage = Manufacturedeliverypackage::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manufacturedeliverypackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manufacturedeliverypackage->update($data);

		return Redirect::route('manufacturedeliverypackages.index');
	}

	/**
	 * Remove the specified manufacturedeliverypackage from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacturedeliverypackage::destroy($id);

		return Redirect::route('manufacturedeliverypackages.index');
	}

}
