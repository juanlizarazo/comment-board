<?php

class WallController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /wall
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('wall');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /wall/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}
	/**
	 * Store a newly created resource in storage.
	 * POST /wall
	 *
	 * @return Response
	 */
	public function store()
	{
	  $data = Input::get('post');
	  
	  $post = new Post();
	  $post->post = $data; 
	  $post->save();
	  
	  return Redirect::to('wall');
	}
	/**
	 * Display the specified resource.
	 * GET /wall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}
	/**
	 * Show the form for editing the specified resource.
	 * GET /wall/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}
	/**
	 * Update the specified resource in storage.
	 * PUT /wall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}
	/**
	 * Remove the specified resource from storage.
	 * DELETE /wall/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}
}