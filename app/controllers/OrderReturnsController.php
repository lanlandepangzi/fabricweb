<?php

class OrderReturnsController extends \BaseController {

	/**
	 * Display a listing of orderreturns
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderreturns = Orderreturn::all();

		return View::make('orderreturns.index', compact('orderreturns'));
	}

	/**
	 * Show the form for creating a new orderreturn
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderreturns.create');
	}

	/**
	 * Store a newly created orderreturn in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderreturn::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderreturn::create($data);

		return Redirect::route('orderreturns.index');
	}

	/**
	 * Display the specified orderreturn.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderreturn = Orderreturn::findOrFail($id);

		return View::make('orderreturns.show', compact('orderreturn'));
	}

	/**
	 * Show the form for editing the specified orderreturn.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderreturn = Orderreturn::find($id);

		return View::make('orderreturns.edit', compact('orderreturn'));
	}

	/**
	 * Update the specified orderreturn in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderreturn = Orderreturn::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderreturn::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderreturn->update($data);

		return Redirect::route('orderreturns.index');
	}

	/**
	 * Remove the specified orderreturn from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderreturn::destroy($id);

		return Redirect::route('orderreturns.index');
	}

}
