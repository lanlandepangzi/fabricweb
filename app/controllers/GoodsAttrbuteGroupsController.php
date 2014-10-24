<?php

class GoodsAttrbuteGroupsController extends \BaseController {

	/**
	 * Display a listing of goodsattrbutegroups
	 *
	 * @return Response
	 */
	public function index()
	{
		$goodsattrbutegroups = Goodsattrbutegroup::all();

		return View::make('goodsattrbutegroups.index', compact('goodsattrbutegroups'));
	}

	/**
	 * Show the form for creating a new goodsattrbutegroup
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('goodsattrbutegroups.create');
	}

	/**
	 * Store a newly created goodsattrbutegroup in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Goodsattrbutegroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Goodsattrbutegroup::create($data);

		return Redirect::route('goodsattrbutegroups.index');
	}

	/**
	 * Display the specified goodsattrbutegroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$goodsattrbutegroup = Goodsattrbutegroup::findOrFail($id);

		return View::make('goodsattrbutegroups.show', compact('goodsattrbutegroup'));
	}

	/**
	 * Show the form for editing the specified goodsattrbutegroup.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$goodsattrbutegroup = Goodsattrbutegroup::find($id);

		return View::make('goodsattrbutegroups.edit', compact('goodsattrbutegroup'));
	}

	/**
	 * Update the specified goodsattrbutegroup in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$goodsattrbutegroup = Goodsattrbutegroup::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Goodsattrbutegroup::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$goodsattrbutegroup->update($data);

		return Redirect::route('goodsattrbutegroups.index');
	}

	/**
	 * Remove the specified goodsattrbutegroup from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Goodsattrbutegroup::destroy($id);

		return Redirect::route('goodsattrbutegroups.index');
	}

}
