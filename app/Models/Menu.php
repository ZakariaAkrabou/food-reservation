<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
                            'name',
                            'description',
                            'price',
                            'image'
                            ];

    
    public function categories(){


        return $this->belongsToMany(Category::class, 'category_menu');
    }

    

    // public function generateSlug()
    // {
    //     $slug = Str::slug($this->name);

       
    //     if (Category::where('slug', $slug)->exists()) {
    //         $slug .= '-' . uniqid();
    //     }

    //     return $slug;
    // }
}