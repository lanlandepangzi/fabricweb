<?php

class IdsController extends \BaseController {

	/**
	 * Display a listing of ids
	 *
	 * @return Response
	 */
	public function index()
	{
		$ids = Id::all();

		return View::make('ids.index', compact('ids'));
	}

	/**
	 * Show the form for creating a new id
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ids.create');
	}

	/**
	 * Store a newly created id in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Id::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Id::create($data);

		return Redirect::route('ids.index');
	}

	/**
	 * Display the specified id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$id = Id::findOrFail($id);

		return View::make('ids.show', compact('id'));
	}

	/**
	 * Show the form for editing the specified id.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$id = Id::find($id);

		return View::make('ids.edit', compact('id'));
	}

	/**
	 * Update the specified id in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$id = Id::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Id::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$id->update($data);

		return Redirect::route('ids.index');
	}

	/**
	 * Remove the specified id from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Id::destroy($id);

		return Redirect::route('ids.index');
	}

}
