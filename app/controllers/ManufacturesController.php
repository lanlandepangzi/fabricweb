<?php

class ManufacturesController extends \BaseController {

	/**
	 * Display a listing of manufactures
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufactures = Manufacture::all();

		return View::make('manufactures.index', compact('manufactures'));
	}

	/**
	 * Show the form for creating a new manufacture
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manufactures.create');
	}

	/**
	 * Store a newly created manufacture in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manufacture::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manufacture::create($data);

		return Redirect::route('manufactures.index');
	}

	/**
	 * Display the specified manufacture.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacture = Manufacture::findOrFail($id);

		return View::make('manufactures.show', compact('manufacture'));
	}

	/**
	 * Show the form for editing the specified manufacture.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacture = Manufacture::find($id);

		return View::make('manufactures.edit', compact('manufacture'));
	}

	/**
	 * Update the specified manufacture in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacture = Manufacture::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manufacture::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manufacture->update($data);

		return Redirect::route('manufactures.index');
	}

	/**
	 * Remove the specified manufacture from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacture::destroy($id);

		return Redirect::route('manufactures.index');
	}

}
