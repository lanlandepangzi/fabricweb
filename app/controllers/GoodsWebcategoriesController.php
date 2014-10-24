<?php

class GoodsWebcategoriesController extends \BaseController {

	/**
	 * Display a listing of goodswebcategories
	 *
	 * @return Response
	 */
	public function index()
	{
		$goodswebcategories = Goodswebcategory::all();

		return View::make('goodswebcategories.index', compact('goodswebcategories'));
	}

	/**
	 * Show the form for creating a new goodswebcategory
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goodswebcategories.create');
	}

	/**
	 * Store a newly created goodswebcategory in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Goodswebcategory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Goodswebcategory::create($data);

		return Redirect::route('goodswebcategories.index');
	}

	/**
	 * Display the specified goodswebcategory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goodswebcategory = Goodswebcategory::findOrFail($id);

		return View::make('goodswebcategories.show', compact('goodswebcategory'));
	}

	/**
	 * Show the form for editing the specified goodswebcategory.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goodswebcategory = Goodswebcategory::find($id);

		return View::make('goodswebcategories.edit', compact('goodswebcategory'));
	}

	/**
	 * Update the specified goodswebcategory in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goodswebcategory = Goodswebcategory::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Goodswebcategory::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$goodswebcategory->update($data);

		return Redirect::route('goodswebcategories.index');
	}

	/**
	 * Remove the specified goodswebcategory from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goodswebcategory::destroy($id);

		return Redirect::route('goodswebcategories.index');
	}

}
