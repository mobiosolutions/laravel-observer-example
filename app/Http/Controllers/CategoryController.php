<?php

namespace App\Http\Controllers;

use Validator;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     *  get all category data and display 
     */
    public function index()
    {
        $categories = $this->category->getAllCategory();
        return view('show_category')->with('categories', $categories);
    }

    /**
     * render create category page
     */
    public function create()
    {
        return view('create_category');
    }

    /**
     * storing category
     * 
     * @param $request
     * @return
     */
    public function store(Request $request)
    {

        $rules = array(
            'name' => 'required',
            'description' => 'required',
        );

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect('/createCategory')->withInput()->withErrors($validator);
        }

        $createCategory = $this->category->storeCategory($request->all());
        if ($createCategory) {
            return redirect('/');
        }
    }

    /**
     *render edit category page
     */
    public function edit($id)
    {
        $category = $this->category->editCategory($id);
        return view('edit_category')->with('category', $category);
    }

    /**
     * update category
     * 
     * @param $request
     * @return
     */
    public function update(Request $request)
    {
        $updateCategory = $this->category->updateCategory($request->all());
        if ($updateCategory) {
            return redirect('/');
        }
    }

    /**
     * soft delete category
     * 
     * @param $id
     * @return
     */
    public function delete($id)
    {
        $this->category->deleteCategory($id);
        return redirect('/');
    }

    /**
     * restore deleted category
     * 
     * @param $id
     * @return
     */
    public function restore($id)
    {
        $this->category->restoreCategory($id);
        return redirect('/');
    }
}
