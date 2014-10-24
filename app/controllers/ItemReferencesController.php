<?php

class ItemReferencesController extends \BaseController {

	/**
	 * Display a listing of itemreferences
	 *
	 * @return Response
	 */
	public function index()
	{
		$itemreferences = Itemreference::all();

		return View::make('itemreferences.index', compact('itemreferences'));
	}

	/**
	 * Show the form for creating a new itemreference
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('itemreferences.create');
	}

	/**
	 * Store a newly created itemreference in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Itemreference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Itemreference::create($data);

		return Redirect::route('itemreferences.index');
	}

	/**
	 * Display the specified itemreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$itemreference = Itemreference::findOrFail($id);

		return View::make('itemreferences.show', compact('itemreference'));
	}

	/**
	 * Show the form for editing the specified itemreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$itemreference = Itemreference::find($id);

		return View::make('itemreferences.edit', compact('itemreference'));
	}

	/**
	 * Update the specified itemreference in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$itemreference = Itemreference::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Itemreference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$itemreference->update($data);

		return Redirect::route('itemreferences.index');
	}

	/**
	 * Remove the specified itemreference from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Itemreference::destroy($id);

		return Redirect::route('itemreferences.index');
	}

}
