<?php

class GoodsReferencesController extends \BaseController {

	/**
	 * Display a listing of goodsreferences
	 *
	 * @return Response
	 */
	public function index()
	{
		$goodsreferences = Goodsreference::all();

		return View::make('goodsreferences.index', compact('goodsreferences'));
	}

	/**
	 * Show the form for creating a new goodsreference
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goodsreferences.create');
	}

	/**
	 * Store a newly created goodsreference in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Goodsreference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Goodsreference::create($data);

		return Redirect::route('goodsreferences.index');
	}

	/**
	 * Display the specified goodsreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goodsreference = Goodsreference::findOrFail($id);

		return View::make('goodsreferences.show', compact('goodsreference'));
	}

	/**
	 * Show the form for editing the specified goodsreference.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goodsreference = Goodsreference::find($id);

		return View::make('goodsreferences.edit', compact('goodsreference'));
	}

	/**
	 * Update the specified goodsreference in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goodsreference = Goodsreference::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Goodsreference::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$goodsreference->update($data);

		return Redirect::route('goodsreferences.index');
	}

	/**
	 * Remove the specified goodsreference from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goodsreference::destroy($id);

		return Redirect::route('goodsreferences.index');
	}

}
