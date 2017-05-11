<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Model\Category;

class CategoryController extends CommonController
{
    /**
     * Display a listing of categories
     *
     * @return \Illuminate\Http\Response
     */
    // get.admin/category
    public function index()
    {
        $categories = Category::all();
        dd($categories);
        echo "hello category";
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    //get.admin/category/create
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //post.admin/category
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified category.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //get.admin/category/{category}
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param  int  $id 
     * @return \Illuminate\Http\Response
     */
    //get.admin/category/{category}/edit
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified category in category list.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //put.admin/category/{category}
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified category from category list.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //delete.admin/category/{category}
    public function destroy($id)
    {
        //
    }
}
