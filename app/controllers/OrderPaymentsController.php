<?php

class OrderPaymentsController extends \BaseController {

	/**
	 * Display a listing of orderpayments
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderpayments = Orderpayment::all();

		return View::make('orderpayments.index', compact('orderpayments'));
	}

	/**
	 * Show the form for creating a new orderpayment
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderpayments.create');
	}

	/**
	 * Store a newly created orderpayment in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderpayment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderpayment::create($data);

		return Redirect::route('orderpayments.index');
	}

	/**
	 * Display the specified orderpayment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderpayment = Orderpayment::findOrFail($id);

		return View::make('orderpayments.show', compact('orderpayment'));
	}

	/**
	 * Show the form for editing the specified orderpayment.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderpayment = Orderpayment::find($id);

		return View::make('orderpayments.edit', compact('orderpayment'));
	}

	/**
	 * Update the specified orderpayment in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderpayment = Orderpayment::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderpayment::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderpayment->update($data);

		return Redirect::route('orderpayments.index');
	}

	/**
	 * Remove the specified orderpayment from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderpayment::destroy($id);

		return Redirect::route('orderpayments.index');
	}

}
