<?php

class CustomerGroupsController extends \BaseController {

	/**
	 * Display a listing of customergroups
	 *
	 * @return Response
	 */
	public function index()
	{
		$customergroups = Customergroup::all();

		return View::make('customergroups.index', compact('customergroups'));
	}

	/**
	 * Show the form for creating a new customergroup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('customergroups.create');
	}

	/**
	 * Store a newly created customergroup in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Customergroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Customergroup::create($data);

		return Redirect::route('customergroups.index');
	}

	/**
	 * Display the specified customergroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$customergroup = Customergroup::findOrFail($id);

		return View::make('customergroups.show', compact('customergroup'));
	}

	/**
	 * Show the form for editing the specified customergroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$customergroup = Customergroup::find($id);

		return View::make('customergroups.edit', compact('customergroup'));
	}

	/**
	 * Update the specified customergroup in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$customergroup = Customergroup::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Customergroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$customergroup->update($data);

		return Redirect::route('customergroups.index');
	}

	/**
	 * Remove the specified customergroup from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Customergroup::destroy($id);

		return Redirect::route('customergroups.index');
	}

}
