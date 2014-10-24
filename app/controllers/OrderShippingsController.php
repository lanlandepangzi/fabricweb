<?php

class OrderShippingsController extends \BaseController {

	/**
	 * Display a listing of ordershippings
	 *
	 * @return Response
	 */
	public function index()
	{
		$ordershippings = Ordershipping::all();

		return View::make('ordershippings.index', compact('ordershippings'));
	}

	/**
	 * Show the form for creating a new ordershipping
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ordershippings.create');
	}

	/**
	 * Store a newly created ordershipping in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ordershipping::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ordershipping::create($data);

		return Redirect::route('ordershippings.index');
	}

	/**
	 * Display the specified ordershipping.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ordershipping = Ordershipping::findOrFail($id);

		return View::make('ordershippings.show', compact('ordershipping'));
	}

	/**
	 * Show the form for editing the specified ordershipping.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ordershipping = Ordershipping::find($id);

		return View::make('ordershippings.edit', compact('ordershipping'));
	}

	/**
	 * Update the specified ordershipping in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ordershipping = Ordershipping::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Ordershipping::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ordershipping->update($data);

		return Redirect::route('ordershippings.index');
	}

	/**
	 * Remove the specified ordershipping from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ordershipping::destroy($id);

		return Redirect::route('ordershippings.index');
	}

}
