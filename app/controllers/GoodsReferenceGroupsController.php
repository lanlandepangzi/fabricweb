<?php

class GoodsReferenceGroupsController extends \BaseController {

	/**
	 * Display a listing of goodsreferencegroups
	 *
	 * @return Response
	 */
	public function index()
	{
		$goodsreferencegroups = Goodsreferencegroup::all();

		return View::make('goodsreferencegroups.index', compact('goodsreferencegroups'));
	}

	/**
	 * Show the form for creating a new goodsreferencegroup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goodsreferencegroups.create');
	}

	/**
	 * Store a newly created goodsreferencegroup in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Goodsreferencegroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Goodsreferencegroup::create($data);

		return Redirect::route('goodsreferencegroups.index');
	}

	/**
	 * Display the specified goodsreferencegroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goodsreferencegroup = Goodsreferencegroup::findOrFail($id);

		return View::make('goodsreferencegroups.show', compact('goodsreferencegroup'));
	}

	/**
	 * Show the form for editing the specified goodsreferencegroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goodsreferencegroup = Goodsreferencegroup::find($id);

		return View::make('goodsreferencegroups.edit', compact('goodsreferencegroup'));
	}

	/**
	 * Update the specified goodsreferencegroup in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goodsreferencegroup = Goodsreferencegroup::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Goodsreferencegroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$goodsreferencegroup->update($data);

		return Redirect::route('goodsreferencegroups.index');
	}

	/**
	 * Remove the specified goodsreferencegroup from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goodsreferencegroup::destroy($id);

		return Redirect::route('goodsreferencegroups.index');
	}

}
