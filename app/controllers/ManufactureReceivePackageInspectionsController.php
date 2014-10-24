<?php

class ManufactureReceivePackageInspectionsController extends \BaseController {

	/**
	 * Display a listing of manufacturereceivepackageinspections
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturereceivepackageinspections = Manufacturereceivepackageinspection::all();

		return View::make('manufacturereceivepackageinspections.index', compact('manufacturereceivepackageinspections'));
	}

	/**
	 * Show the form for creating a new manufacturereceivepackageinspection
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manufacturereceivepackageinspections.create');
	}

	/**
	 * Store a newly created manufacturereceivepackageinspection in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manufacturereceivepackageinspection::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manufacturereceivepackageinspection::create($data);

		return Redirect::route('manufacturereceivepackageinspections.index');
	}

	/**
	 * Display the specified manufacturereceivepackageinspection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturereceivepackageinspection = Manufacturereceivepackageinspection::findOrFail($id);

		return View::make('manufacturereceivepackageinspections.show', compact('manufacturereceivepackageinspection'));
	}

	/**
	 * Show the form for editing the specified manufacturereceivepackageinspection.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturereceivepackageinspection = Manufacturereceivepackageinspection::find($id);

		return View::make('manufacturereceivepackageinspections.edit', compact('manufacturereceivepackageinspection'));
	}

	/**
	 * Update the specified manufacturereceivepackageinspection in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacturereceivepackageinspection = Manufacturereceivepackageinspection::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manufacturereceivepackageinspection::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manufacturereceivepackageinspection->update($data);

		return Redirect::route('manufacturereceivepackageinspections.index');
	}

	/**
	 * Remove the specified manufacturereceivepackageinspection from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacturereceivepackageinspection::destroy($id);

		return Redirect::route('manufacturereceivepackageinspections.index');
	}

}
