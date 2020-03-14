<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    protected $table = 'receipes';
    protected $fillable = ['name', 'ingredient', 'category','author_id'];
    // protected $guarded = [];
    public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }
}
