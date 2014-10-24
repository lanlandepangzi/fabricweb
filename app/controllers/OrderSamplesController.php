<?php

class OrderSamplesController extends \BaseController {

	/**
	 * Display a listing of ordersamples
	 *
	 * @return Response
	 */
	public function index()
	{
		$ordersamples = Ordersample::all();

		return View::make('ordersamples.index', compact('ordersamples'));
	}

	/**
	 * Show the form for creating a new ordersample
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ordersamples.create');
	}

	/**
	 * Store a newly created ordersample in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ordersample::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ordersample::create($data);

		return Redirect::route('ordersamples.index');
	}

	/**
	 * Display the specified ordersample.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ordersample = Ordersample::findOrFail($id);

		return View::make('ordersamples.show', compact('ordersample'));
	}

	/**
	 * Show the form for editing the specified ordersample.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ordersample = Ordersample::find($id);

		return View::make('ordersamples.edit', compact('ordersample'));
	}

	/**
	 * Update the specified ordersample in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ordersample = Ordersample::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Ordersample::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ordersample->update($data);

		return Redirect::route('ordersamples.index');
	}

	/**
	 * Remove the specified ordersample from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ordersample::destroy($id);

		return Redirect::route('ordersamples.index');
	}

}
