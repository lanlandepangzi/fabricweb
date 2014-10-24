<?php

class GoodsAttrbuteValuesController extends \BaseController {

	/**
	 * Display a listing of goodsattrbutevalues
	 *
	 * @return Response
	 */
	public function index()
	{
		$goodsattrbutevalues = Goodsattrbutevalue::all();

		return View::make('goodsattrbutevalues.index', compact('goodsattrbutevalues'));
	}

	/**
	 * Show the form for creating a new goodsattrbutevalue
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goodsattrbutevalues.create');
	}

	/**
	 * Store a newly created goodsattrbutevalue in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Goodsattrbutevalue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Goodsattrbutevalue::create($data);

		return Redirect::route('goodsattrbutevalues.index');
	}

	/**
	 * Display the specified goodsattrbutevalue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goodsattrbutevalue = Goodsattrbutevalue::findOrFail($id);

		return View::make('goodsattrbutevalues.show', compact('goodsattrbutevalue'));
	}

	/**
	 * Show the form for editing the specified goodsattrbutevalue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goodsattrbutevalue = Goodsattrbutevalue::find($id);

		return View::make('goodsattrbutevalues.edit', compact('goodsattrbutevalue'));
	}

	/**
	 * Update the specified goodsattrbutevalue in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goodsattrbutevalue = Goodsattrbutevalue::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Goodsattrbutevalue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$goodsattrbutevalue->update($data);

		return Redirect::route('goodsattrbutevalues.index');
	}

	/**
	 * Remove the specified goodsattrbutevalue from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goodsattrbutevalue::destroy($id);

		return Redirect::route('goodsattrbutevalues.index');
	}

}
