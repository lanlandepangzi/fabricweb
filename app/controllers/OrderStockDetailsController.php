<?php

class OrderStockDetailsController extends \BaseController {

	/**
	 * Display a listing of orderstockdetails
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderstockdetails = Orderstockdetail::all();

		return View::make('orderstockdetails.index', compact('orderstockdetails'));
	}

	/**
	 * Show the form for creating a new orderstockdetail
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderstockdetails.create');
	}

	/**
	 * Store a newly created orderstockdetail in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderstockdetail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderstockdetail::create($data);

		return Redirect::route('orderstockdetails.index');
	}

	/**
	 * Display the specified orderstockdetail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderstockdetail = Orderstockdetail::findOrFail($id);

		return View::make('orderstockdetails.show', compact('orderstockdetail'));
	}

	/**
	 * Show the form for editing the specified orderstockdetail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderstockdetail = Orderstockdetail::find($id);

		return View::make('orderstockdetails.edit', compact('orderstockdetail'));
	}

	/**
	 * Update the specified orderstockdetail in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderstockdetail = Orderstockdetail::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderstockdetail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderstockdetail->update($data);

		return Redirect::route('orderstockdetails.index');
	}

	/**
	 * Remove the specified orderstockdetail from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderstockdetail::destroy($id);

		return Redirect::route('orderstockdetails.index');
	}

}
