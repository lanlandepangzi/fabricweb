<?php

class OrderDeliveryPackagesController extends \BaseController {

	/**
	 * Display a listing of orderdeliverypackages
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderdeliverypackages = Orderdeliverypackage::all();

		return View::make('orderdeliverypackages.index', compact('orderdeliverypackages'));
	}

	/**
	 * Show the form for creating a new orderdeliverypackage
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderdeliverypackages.create');
	}

	/**
	 * Store a newly created orderdeliverypackage in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderdeliverypackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderdeliverypackage::create($data);

		return Redirect::route('orderdeliverypackages.index');
	}

	/**
	 * Display the specified orderdeliverypackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderdeliverypackage = Orderdeliverypackage::findOrFail($id);

		return View::make('orderdeliverypackages.show', compact('orderdeliverypackage'));
	}

	/**
	 * Show the form for editing the specified orderdeliverypackage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderdeliverypackage = Orderdeliverypackage::find($id);

		return View::make('orderdeliverypackages.edit', compact('orderdeliverypackage'));
	}

	/**
	 * Update the specified orderdeliverypackage in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderdeliverypackage = Orderdeliverypackage::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderdeliverypackage::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderdeliverypackage->update($data);

		return Redirect::route('orderdeliverypackages.index');
	}

	/**
	 * Remove the specified orderdeliverypackage from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderdeliverypackage::destroy($id);

		return Redirect::route('orderdeliverypackages.index');
	}

}
