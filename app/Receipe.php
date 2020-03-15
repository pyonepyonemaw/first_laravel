<?php

namespace App;
use App\Category;
use App\Mail\ReceipeStore;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Receipe extends Model
{
    protected $table = 'receipes';
    protected $fillable = ['name', 'ingredient', 'category','author_id'];
    // protected $guarded = [];

    protected static function boot(){
    	parent::boot();
    	static::created(function($receipe){
    		session()->flash("message",'Receipe has created successfully!');
        	Mail::to('pyonepyonemaw5@gmail.com')->send(new ReceipeStore($receipe));
    	});
    	static::updated(function($receipe){
    		session()->flash("message",'Receipe has updated successfully!');
        	Mail::to('pyonepyonemaw5@gmail.com')->send(new ReceipeStore($receipe));
    	});
    	static::deleted(function($receipe){
    		session()->flash("message",'Receipe has deleted successfully!');
        	Mail::to('pyonepyonemaw5@gmail.com')->send(new ReceipeStore($receipe));
    	});
    }

    public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }
}
