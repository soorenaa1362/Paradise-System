<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";
    protected $guarded = [];


    public function getParentAttribute()
    {
        return (is_null($this->parent_id)) ? 'ندارد' : $this->parentCategory->title;
    }
    

    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }


    public function subCategories()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }
}
