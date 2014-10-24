<?php

class GoodsController extends \BaseController {

	/**
	 * Display a listing of goods
	 *
	 * @return Response
	 */
	public function index()
	{
		$goods = Good::all();

		return View::make('goods.index', compact('goods'));
	}

	/**
	 * Show the form for creating a new good
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goods.create');
	}

	/**
	 * Store a newly created good in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Good::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Good::create($data);

		return Redirect::route('goods.index');
	}

	/**
	 * Display the specified good.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$good = Good::findOrFail($id);

		return View::make('goods.show', compact('good'));
	}

	/**
	 * Show the form for editing the specified good.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$good = Good::find($id);

		return View::make('goods.edit', compact('good'));
	}

	/**
	 * Update the specified good in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$good = Good::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Good::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$good->update($data);

		return Redirect::route('goods.index');
	}

	/**
	 * Remove the specified good from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Good::destroy($id);

		return Redirect::route('goods.index');
	}

}
