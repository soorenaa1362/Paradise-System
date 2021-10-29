<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    protected $table = "buys";
    protected $guarded = [];


    public function getParentAttribute()
    {
        return (is_null($this->category_id)) ? '---' : $this->categoryBuy->title;
    }


    public function categoryBuy()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
