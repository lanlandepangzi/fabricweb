<?php

class GoodsReferenceValuesController extends \BaseController {

	/**
	 * Display a listing of goodsreferencevalues
	 *
	 * @return Response
	 */
	public function index()
	{
		$goodsreferencevalues = Goodsreferencevalue::all();

		return View::make('goodsreferencevalues.index', compact('goodsreferencevalues'));
	}

	/**
	 * Show the form for creating a new goodsreferencevalue
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goodsreferencevalues.create');
	}

	/**
	 * Store a newly created goodsreferencevalue in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Goodsreferencevalue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Goodsreferencevalue::create($data);

		return Redirect::route('goodsreferencevalues.index');
	}

	/**
	 * Display the specified goodsreferencevalue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goodsreferencevalue = Goodsreferencevalue::findOrFail($id);

		return View::make('goodsreferencevalues.show', compact('goodsreferencevalue'));
	}

	/**
	 * Show the form for editing the specified goodsreferencevalue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goodsreferencevalue = Goodsreferencevalue::find($id);

		return View::make('goodsreferencevalues.edit', compact('goodsreferencevalue'));
	}

	/**
	 * Update the specified goodsreferencevalue in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goodsreferencevalue = Goodsreferencevalue::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Goodsreferencevalue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$goodsreferencevalue->update($data);

		return Redirect::route('goodsreferencevalues.index');
	}

	/**
	 * Remove the specified goodsreferencevalue from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goodsreferencevalue::destroy($id);

		return Redirect::route('goodsreferencevalues.index');
	}

}
