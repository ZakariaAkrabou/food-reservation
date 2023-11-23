<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();
        
        return view('admin.category',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
         


        $this->validate($request,[

            'name'=> 'required',
            'image'=> 'required|image|mimes:jpg,png,jpeg',
            'description'=> 'required',
            'slug'=> 'required',

        ]);
        
        try{

            $category = new Category();

            $category->name = $request->name;
            $category->description = $request->description;
            $category->slug= $request->slug;
   
           if($request->hasfile('image')){

                   $file = $request->file('image');
                   $ext = $file->getClientOriginalExtension();
                   $filename = time().'.'.$ext;

                    $file->move('admin/uploads/category/',$filename);
                    $category->image = $filename;

            }
   
                $category->save();
                
                return redirect()->back()->with('success','File Upload Successfully!!');

            
        }
        catch(\Exception $e){
            return redirect()->back()->with('error','Something goes wrong while uploading file!');
        }
        

    }

        
    
    
    
    
    public function show(string $id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        return view('admin.category.edit',compact('category'));
    }

   
    public function update(Request $request, $id)
    {
        try {
            $category = Category::findOrFail($id);
        
            $category->name = $request->name;
            $category->description = $request->description;
            $category->slug = $request->slug;
        
            if ($request->hasfile('image')) {
                if (!empty($category->image) && file_exists(public_path('admin/uploads/category/' . $category->image))) {
                    unlink(public_path('admin/uploads/category/' . $category->image));
                }
        
                $file = $request->file('image');
                $ext = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext;
                $file->move('admin/uploads/category/', $filename);
                $category->image = $filename;
            }
        
            $category->save();
        
            return redirect()->back()->with('success', 'Category updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something went wrong while updating category! Error: ' . $e->getMessage());
        }
        
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        Storage::delete($category->image);
        
        $category->menus()->detach();

        $category->delete();

       return redirect()->back()->with('Category deleted successfully');
    }
}