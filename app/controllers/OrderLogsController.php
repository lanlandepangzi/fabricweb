<?php

class OrderLogsController extends \BaseController {

	/**
	 * Display a listing of orderlogs
	 *
	 * @return Response
	 */
	public function index()
	{
		$orderlogs = Orderlog::all();

		return View::make('orderlogs.index', compact('orderlogs'));
	}

	/**
	 * Show the form for creating a new orderlog
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('orderlogs.create');
	}

	/**
	 * Store a newly created orderlog in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Orderlog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Orderlog::create($data);

		return Redirect::route('orderlogs.index');
	}

	/**
	 * Display the specified orderlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$orderlog = Orderlog::findOrFail($id);

		return View::make('orderlogs.show', compact('orderlog'));
	}

	/**
	 * Show the form for editing the specified orderlog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$orderlog = Orderlog::find($id);

		return View::make('orderlogs.edit', compact('orderlog'));
	}

	/**
	 * Update the specified orderlog in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$orderlog = Orderlog::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Orderlog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$orderlog->update($data);

		return Redirect::route('orderlogs.index');
	}

	/**
	 * Remove the specified orderlog from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Orderlog::destroy($id);

		return Redirect::route('orderlogs.index');
	}

}
