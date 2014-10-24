<?php

class GoodsAlbumsController extends \BaseController {

	/**
	 * Display a listing of goodsalbums
	 *
	 * @return Response
	 */
	public function index()
	{
		$goodsalbums = Goodsalbum::all();

		return View::make('goodsalbums.index', compact('goodsalbums'));
	}

	/**
	 * Show the form for creating a new goodsalbum
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goodsalbums.create');
	}

	/**
	 * Store a newly created goodsalbum in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Goodsalbum::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Goodsalbum::create($data);

		return Redirect::route('goodsalbums.index');
	}

	/**
	 * Display the specified goodsalbum.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goodsalbum = Goodsalbum::findOrFail($id);

		return View::make('goodsalbums.show', compact('goodsalbum'));
	}

	/**
	 * Show the form for editing the specified goodsalbum.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goodsalbum = Goodsalbum::find($id);

		return View::make('goodsalbums.edit', compact('goodsalbum'));
	}

	/**
	 * Update the specified goodsalbum in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goodsalbum = Goodsalbum::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Goodsalbum::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$goodsalbum->update($data);

		return Redirect::route('goodsalbums.index');
	}

	/**
	 * Remove the specified goodsalbum from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goodsalbum::destroy($id);

		return Redirect::route('goodsalbums.index');
	}

}
