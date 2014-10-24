<?php

class SamplewarehouseInoutsController extends \BaseController {

	/**
	 * Display a listing of samplewarehouseinouts
	 *
	 * @return Response
	 */
	public function index()
	{
		$samplewarehouseinouts = Samplewarehouseinout::all();

		return View::make('samplewarehouseinouts.index', compact('samplewarehouseinouts'));
	}

	/**
	 * Show the form for creating a new samplewarehouseinout
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('samplewarehouseinouts.create');
	}

	/**
	 * Store a newly created samplewarehouseinout in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Samplewarehouseinout::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Samplewarehouseinout::create($data);

		return Redirect::route('samplewarehouseinouts.index');
	}

	/**
	 * Display the specified samplewarehouseinout.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$samplewarehouseinout = Samplewarehouseinout::findOrFail($id);

		return View::make('samplewarehouseinouts.show', compact('samplewarehouseinout'));
	}

	/**
	 * Show the form for editing the specified samplewarehouseinout.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$samplewarehouseinout = Samplewarehouseinout::find($id);

		return View::make('samplewarehouseinouts.edit', compact('samplewarehouseinout'));
	}

	/**
	 * Update the specified samplewarehouseinout in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$samplewarehouseinout = Samplewarehouseinout::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Samplewarehouseinout::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$samplewarehouseinout->update($data);

		return Redirect::route('samplewarehouseinouts.index');
	}

	/**
	 * Remove the specified samplewarehouseinout from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Samplewarehouseinout::destroy($id);

		return Redirect::route('samplewarehouseinouts.index');
	}

}
