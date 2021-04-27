<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class BasketCategoryController extends Controller
{
    
    public function index() {
        $categories = Category::onlyTrashed()->get();
        return view('admin.categories.basket', compact('categories'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $category = Category::find($id);
        // $category->delete();
        dd($id);
        // Category::destroy($id);
        // return redirect()->route('categories.index')->with('success', 'Категория удалено');
    }

}
