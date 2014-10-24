<?php

class OrderStocksController extends \BaseController {

	/**
	 * Display a listing of orderstocks
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderstocks = Orderstock::all();

		return View::make('orderstocks.index', compact('orderstocks'));
	}

	/**
	 * Show the form for creating a new orderstock
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderstocks.create');
	}

	/**
	 * Store a newly created orderstock in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderstock::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderstock::create($data);

		return Redirect::route('orderstocks.index');
	}

	/**
	 * Display the specified orderstock.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderstock = Orderstock::findOrFail($id);

		return View::make('orderstocks.show', compact('orderstock'));
	}

	/**
	 * Show the form for editing the specified orderstock.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderstock = Orderstock::find($id);

		return View::make('orderstocks.edit', compact('orderstock'));
	}

	/**
	 * Update the specified orderstock in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderstock = Orderstock::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderstock::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderstock->update($data);

		return Redirect::route('orderstocks.index');
	}

	/**
	 * Remove the specified orderstock from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderstock::destroy($id);

		return Redirect::route('orderstocks.index');
	}

}
