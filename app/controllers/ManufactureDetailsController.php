<?php

class ManufactureDetailsController extends \BaseController {

	/**
	 * Display a listing of manufacturedetails
	 *
	 * @return Response
	 */
	public function index()
	{
		$manufacturedetails = Manufacturedetail::all();

		return View::make('manufacturedetails.index', compact('manufacturedetails'));
	}

	/**
	 * Show the form for creating a new manufacturedetail
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('manufacturedetails.create');
	}

	/**
	 * Store a newly created manufacturedetail in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Manufacturedetail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Manufacturedetail::create($data);

		return Redirect::route('manufacturedetails.index');
	}

	/**
	 * Display the specified manufacturedetail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$manufacturedetail = Manufacturedetail::findOrFail($id);

		return View::make('manufacturedetails.show', compact('manufacturedetail'));
	}

	/**
	 * Show the form for editing the specified manufacturedetail.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$manufacturedetail = Manufacturedetail::find($id);

		return View::make('manufacturedetails.edit', compact('manufacturedetail'));
	}

	/**
	 * Update the specified manufacturedetail in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$manufacturedetail = Manufacturedetail::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Manufacturedetail::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$manufacturedetail->update($data);

		return Redirect::route('manufacturedetails.index');
	}

	/**
	 * Remove the specified manufacturedetail from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Manufacturedetail::destroy($id);

		return Redirect::route('manufacturedetails.index');
	}

}
