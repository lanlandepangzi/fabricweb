<?php

class SamplewarehousesController extends \BaseController {

	/**
	 * Display a listing of samplewarehouses
	 *
	 * @return Response
	 */
	public function index()
	{
		$samplewarehouses = Samplewarehouse::all();

		return View::make('samplewarehouses.index', compact('samplewarehouses'));
	}

	/**
	 * Show the form for creating a new samplewarehouse
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('samplewarehouses.create');
	}

	/**
	 * Store a newly created samplewarehouse in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Samplewarehouse::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Samplewarehouse::create($data);

		return Redirect::route('samplewarehouses.index');
	}

	/**
	 * Display the specified samplewarehouse.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$samplewarehouse = Samplewarehouse::findOrFail($id);

		return View::make('samplewarehouses.show', compact('samplewarehouse'));
	}

	/**
	 * Show the form for editing the specified samplewarehouse.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$samplewarehouse = Samplewarehouse::find($id);

		return View::make('samplewarehouses.edit', compact('samplewarehouse'));
	}

	/**
	 * Update the specified samplewarehouse in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$samplewarehouse = Samplewarehouse::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Samplewarehouse::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$samplewarehouse->update($data);

		return Redirect::route('samplewarehouses.index');
	}

	/**
	 * Remove the specified samplewarehouse from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Samplewarehouse::destroy($id);

		return Redirect::route('samplewarehouses.index');
	}

}
