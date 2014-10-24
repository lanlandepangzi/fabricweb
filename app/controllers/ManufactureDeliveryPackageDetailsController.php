<?php

class ManufactureDeliveryPackageDetailsController extends \BaseController {

	/**
	 * Display a listing of manufacturedeliverypackagedetails
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturedeliverypackagedetails = Manufacturedeliverypackagedetail::all();

		return View::make('manufacturedeliverypackagedetails.index', compact('manufacturedeliverypackagedetails'));
	}

	/**
	 * Show the form for creating a new manufacturedeliverypackagedetail
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manufacturedeliverypackagedetails.create');
	}

	/**
	 * Store a newly created manufacturedeliverypackagedetail in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manufacturedeliverypackagedetail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manufacturedeliverypackagedetail::create($data);

		return Redirect::route('manufacturedeliverypackagedetails.index');
	}

	/**
	 * Display the specified manufacturedeliverypackagedetail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturedeliverypackagedetail = Manufacturedeliverypackagedetail::findOrFail($id);

		return View::make('manufacturedeliverypackagedetails.show', compact('manufacturedeliverypackagedetail'));
	}

	/**
	 * Show the form for editing the specified manufacturedeliverypackagedetail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturedeliverypackagedetail = Manufacturedeliverypackagedetail::find($id);

		return View::make('manufacturedeliverypackagedetails.edit', compact('manufacturedeliverypackagedetail'));
	}

	/**
	 * Update the specified manufacturedeliverypackagedetail in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacturedeliverypackagedetail = Manufacturedeliverypackagedetail::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manufacturedeliverypackagedetail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manufacturedeliverypackagedetail->update($data);

		return Redirect::route('manufacturedeliverypackagedetails.index');
	}

	/**
	 * Remove the specified manufacturedeliverypackagedetail from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacturedeliverypackagedetail::destroy($id);

		return Redirect::route('manufacturedeliverypackagedetails.index');
	}

}
