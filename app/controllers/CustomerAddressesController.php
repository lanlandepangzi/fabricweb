<?php

class CustomerAddressesController extends \BaseController {

	/**
	 * Display a listing of customeraddresses
	 *
	 * @return Response
	 */
	public function index()
	{
		$customeraddresses = Customeraddress::all();

		return View::make('customeraddresses.index', compact('customeraddresses'));
	}

	/**
	 * Show the form for creating a new customeraddress
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('customeraddresses.create');
	}

	/**
	 * Store a newly created customeraddress in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Customeraddress::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Customeraddress::create($data);

		return Redirect::route('customeraddresses.index');
	}

	/**
	 * Display the specified customeraddress.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$customeraddress = Customeraddress::findOrFail($id);

		return View::make('customeraddresses.show', compact('customeraddress'));
	}

	/**
	 * Show the form for editing the specified customeraddress.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$customeraddress = Customeraddress::find($id);

		return View::make('customeraddresses.edit', compact('customeraddress'));
	}

	/**
	 * Update the specified customeraddress in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$customeraddress = Customeraddress::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Customeraddress::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$customeraddress->update($data);

		return Redirect::route('customeraddresses.index');
	}

	/**
	 * Remove the specified customeraddress from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Customeraddress::destroy($id);

		return Redirect::route('customeraddresses.index');
	}

}
