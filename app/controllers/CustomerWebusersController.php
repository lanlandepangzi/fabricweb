<?php

class CustomerWebusersController extends \BaseController {

	/**
	 * Display a listing of customerwebusers
	 *
	 * @return Response
	 */
	public function index()
	{
		$customerwebusers = Customerwebuser::all();

		return View::make('customerwebusers.index', compact('customerwebusers'));
	}

	/**
	 * Show the form for creating a new customerwebuser
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('customerwebusers.create');
	}

	/**
	 * Store a newly created customerwebuser in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Customerwebuser::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Customerwebuser::create($data);

		return Redirect::route('customerwebusers.index');
	}

	/**
	 * Display the specified customerwebuser.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$customerwebuser = Customerwebuser::findOrFail($id);

		return View::make('customerwebusers.show', compact('customerwebuser'));
	}

	/**
	 * Show the form for editing the specified customerwebuser.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$customerwebuser = Customerwebuser::find($id);

		return View::make('customerwebusers.edit', compact('customerwebuser'));
	}

	/**
	 * Update the specified customerwebuser in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$customerwebuser = Customerwebuser::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Customerwebuser::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$customerwebuser->update($data);

		return Redirect::route('customerwebusers.index');
	}

	/**
	 * Remove the specified customerwebuser from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Customerwebuser::destroy($id);

		return Redirect::route('customerwebusers.index');
	}

}
