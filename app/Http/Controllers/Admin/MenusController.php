<?php

namespace App\Http\Controllers\Admin;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MenuStoreRequest;
use Illuminate\Support\Facades\Storage;

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $menu = Menu::all();
        $category = Category::all();
        return view('admin.menus',compact('menu','category'));
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
    public function store(MenuStoreRequest $request)
    {
        $image = $request->file('image')->store('admin\uploads\menus','public');


        $menustore =  Menu::create([
            
            'name'=>$request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'image'=>$image,
        ]);
        
        if($request->has('categories')){

            $menustore = $menustore->categories()->attach($request->categories);
            
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::all();

        $menedit = Menu::find($id);

        return view('admin.menus.edit',compact('menedit','category'));  
    }

   
    

    
    public function update(Request $request, Menu $menu){

            $request->validate([

                'name'=>'required',
                'description' => 'required',
                'price' => 'required'
                
            ]);
        
        $image = $menu->image;
    
        if($request->hasFile('image')){
            
            Storage::delete($menu->image);
            
            $image = $request->file('image')->store('admin\uploads\menus','public');
        }
    
        $menu->update([
            'name' => $request->name,

            'description' => $request->description,

            'image' => $image,

            'price' => $request->price

            
        ]);
        
        if ($request->has('categories')) {
            $menu->categories()->sync($request->categories);
        } else {
           
            $menu->categories()->detach();
        }
    
        $menu->save();
    
        return redirect()->back()->with('success', 'Menu updated successfully.');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menu $menu)
    {

        Storage::delete($menu->image);
        $menu->categories()->detach();
        $menu->delete();

        
        return redirect()->back()->with('Menu deleted successfully');
    }
}