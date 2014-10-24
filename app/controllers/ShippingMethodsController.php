<?php

class ShippingMethodsController extends \BaseController {

	/**
	 * Display a listing of shippingmethods
	 *
	 * @return Response
	 */
	public function index()
	{
		$shippingmethods = Shippingmethod::all();

		return View::make('shippingmethods.index', compact('shippingmethods'));
	}

	/**
	 * Show the form for creating a new shippingmethod
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('shippingmethods.create');
	}

	/**
	 * Store a newly created shippingmethod in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Shippingmethod::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Shippingmethod::create($data);

		return Redirect::route('shippingmethods.index');
	}

	/**
	 * Display the specified shippingmethod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$shippingmethod = Shippingmethod::findOrFail($id);

		return View::make('shippingmethods.show', compact('shippingmethod'));
	}

	/**
	 * Show the form for editing the specified shippingmethod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$shippingmethod = Shippingmethod::find($id);

		return View::make('shippingmethods.edit', compact('shippingmethod'));
	}

	/**
	 * Update the specified shippingmethod in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$shippingmethod = Shippingmethod::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Shippingmethod::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$shippingmethod->update($data);

		return Redirect::route('shippingmethods.index');
	}

	/**
	 * Remove the specified shippingmethod from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Shippingmethod::destroy($id);

		return Redirect::route('shippingmethods.index');
	}

}
