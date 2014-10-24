<?php

class ItemIdentitiesController extends \BaseController {

	/**
	 * Display a listing of itemidentities
	 *
	 * @return Response
	 */
	public function index()
	{
		$itemidentities = Itemidentity::all();

		return View::make('itemidentities.index', compact('itemidentities'));
	}

	/**
	 * Show the form for creating a new itemidentity
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('itemidentities.create');
	}

	/**
	 * Store a newly created itemidentity in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Itemidentity::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Itemidentity::create($data);

		return Redirect::route('itemidentities.index');
	}

	/**
	 * Display the specified itemidentity.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$itemidentity = Itemidentity::findOrFail($id);

		return View::make('itemidentities.show', compact('itemidentity'));
	}

	/**
	 * Show the form for editing the specified itemidentity.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$itemidentity = Itemidentity::find($id);

		return View::make('itemidentities.edit', compact('itemidentity'));
	}

	/**
	 * Update the specified itemidentity in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$itemidentity = Itemidentity::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Itemidentity::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$itemidentity->update($data);

		return Redirect::route('itemidentities.index');
	}

	/**
	 * Remove the specified itemidentity from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Itemidentity::destroy($id);

		return Redirect::route('itemidentities.index');
	}

}
