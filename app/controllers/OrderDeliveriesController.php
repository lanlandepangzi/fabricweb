<?php

class OrderDeliveriesController extends \BaseController {

	/**
	 * Display a listing of orderdeliveries
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderdeliveries = Orderdelivery::all();

		return View::make('orderdeliveries.index', compact('orderdeliveries'));
	}

	/**
	 * Show the form for creating a new orderdelivery
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderdeliveries.create');
	}

	/**
	 * Store a newly created orderdelivery in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderdelivery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderdelivery::create($data);

		return Redirect::route('orderdeliveries.index');
	}

	/**
	 * Display the specified orderdelivery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderdelivery = Orderdelivery::findOrFail($id);

		return View::make('orderdeliveries.show', compact('orderdelivery'));
	}

	/**
	 * Show the form for editing the specified orderdelivery.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderdelivery = Orderdelivery::find($id);

		return View::make('orderdeliveries.edit', compact('orderdelivery'));
	}

	/**
	 * Update the specified orderdelivery in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderdelivery = Orderdelivery::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderdelivery::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderdelivery->update($data);

		return Redirect::route('orderdeliveries.index');
	}

	/**
	 * Remove the specified orderdelivery from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderdelivery::destroy($id);

		return Redirect::route('orderdeliveries.index');
	}

}
