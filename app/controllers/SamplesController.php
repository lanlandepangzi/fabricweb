<?php

class SamplesController extends \BaseController {

	/**
	 * Display a listing of samples
	 *
	 * @return Response
	 */
	public function index()
	{
		$samples = Sample::all();

		return View::make('samples.index', compact('samples'));
	}

	/**
	 * Show the form for creating a new sample
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('samples.create');
	}

	/**
	 * Store a newly created sample in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Sample::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Sample::create($data);

		return Redirect::route('samples.index');
	}

	/**
	 * Display the specified sample.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sample = Sample::findOrFail($id);

		return View::make('samples.show', compact('sample'));
	}

	/**
	 * Show the form for editing the specified sample.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sample = Sample::find($id);

		return View::make('samples.edit', compact('sample'));
	}

	/**
	 * Update the specified sample in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sample = Sample::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Sample::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$sample->update($data);

		return Redirect::route('samples.index');
	}

	/**
	 * Remove the specified sample from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Sample::destroy($id);

		return Redirect::route('samples.index');
	}

}
