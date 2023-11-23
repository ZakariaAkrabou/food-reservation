<?php

namespace App\Http\Controllers\user;

use App\Models\Menu;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FilterController extends Controller
{
    public function filter(Request $request){  
        
        $category = Category::all();
        $categoryId = $request->id;

    
        $filteredCategory = Category::find($categoryId);

    
    if ($filteredCategory) {
    
        $menus = $filteredCategory->menus;
        
        return view('user.menu',compact('menus','category'));
    } 
    else{
       
        return redirect()->route('menu.index')->with('error', 'Category not found.');
    }
    
      
      
    
      
    }
}