<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(15);
        return view ('admin.categories.index', compact('categories'));

    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {

        $request ->validate([
            'name' => 'required|unique:categories|max:20',
              'module' => 'required|max:20',

        ]); 
        $category = new Category;
        $category ->name = e($request->name);
        $category ->module = e($request->module);
        $category ->slug = Str::slug($request->name);

      $category->save();
      return redirect()->route('categories.index')->with('info', 'Agregado Correcctamente');

    }

    
    public function show(Category $category)
    {
        
    }

    
    public function edit($id)
    {
        $category = Category::where('id', $id)-> firstOrFail();
        return view('admin.categories.edit',compact('category'));
    }

   
    public function update(Request $request, Category $category)
    {
        //
    }

   
    public function destroy(Category $category)
    {
        //
    }
}
