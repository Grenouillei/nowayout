<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use App\Services\Blogs\BlogService;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    private $service;

    public function __construct(BlogService $service)
    {
        $this->service = $service;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\BlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request,Blog $blog)
    {
        $this->service->store($request,$blog);
        return response()->json(['status' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  $alias
     * @return \Illuminate\Http\Response
     */
    public function show($alias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\BlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $this->service->store($request,$blog);
        return response()->json(['status' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $this->service->delete($blog);
        return response()->json(['status' => true]);
    }
}
