<?php

class ManufactureReceivePackagesController extends \BaseController {

	/**
	 * Display a listing of manufacturereceivepackages
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturereceivepackages = Manufacturereceivepackage::all();

		return View::make('manufacturereceivepackages.index', compact('manufacturereceivepackages'));
	}

	/**
	 * Show the form for creating a new manufacturereceivepackage
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manufacturereceivepackages.create');
	}

	/**
	 * Store a newly created manufacturereceivepackage in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manufacturereceivepackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manufacturereceivepackage::create($data);

		return Redirect::route('manufacturereceivepackages.index');
	}

	/**
	 * Display the specified manufacturereceivepackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturereceivepackage = Manufacturereceivepackage::findOrFail($id);

		return View::make('manufacturereceivepackages.show', compact('manufacturereceivepackage'));
	}

	/**
	 * Show the form for editing the specified manufacturereceivepackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturereceivepackage = Manufacturereceivepackage::find($id);

		return View::make('manufacturereceivepackages.edit', compact('manufacturereceivepackage'));
	}

	/**
	 * Update the specified manufacturereceivepackage in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacturereceivepackage = Manufacturereceivepackage::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manufacturereceivepackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manufacturereceivepackage->update($data);

		return Redirect::route('manufacturereceivepackages.index');
	}

	/**
	 * Remove the specified manufacturereceivepackage from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacturereceivepackage::destroy($id);

		return Redirect::route('manufacturereceivepackages.index');
	}

}
