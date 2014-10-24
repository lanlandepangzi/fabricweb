<?php

class PaymentMethodsController extends \BaseController {

	/**
	 * Display a listing of paymentmethods
	 *
	 * @return Response
	 */
	public function index()
	{
		$paymentmethods = Paymentmethod::all();

		return View::make('paymentmethods.index', compact('paymentmethods'));
	}

	/**
	 * Show the form for creating a new paymentmethod
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('paymentmethods.create');
	}

	/**
	 * Store a newly created paymentmethod in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Paymentmethod::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Paymentmethod::create($data);

		return Redirect::route('paymentmethods.index');
	}

	/**
	 * Display the specified paymentmethod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$paymentmethod = Paymentmethod::findOrFail($id);

		return View::make('paymentmethods.show', compact('paymentmethod'));
	}

	/**
	 * Show the form for editing the specified paymentmethod.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$paymentmethod = Paymentmethod::find($id);

		return View::make('paymentmethods.edit', compact('paymentmethod'));
	}

	/**
	 * Update the specified paymentmethod in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$paymentmethod = Paymentmethod::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Paymentmethod::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$paymentmethod->update($data);

		return Redirect::route('paymentmethods.index');
	}

	/**
	 * Remove the specified paymentmethod from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Paymentmethod::destroy($id);

		return Redirect::route('paymentmethods.index');
	}

}
