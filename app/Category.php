<?php

namespace App;

use App\Receipe;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Support\Facades\Mail;

class Category extends Model
{
	protected $table = 'categories';
	protected $fillable = ['name','description'];

	protected static function boot(){
    	parent::boot();
    	static::created(function($category){
    		session()->flash("message",'Category has created successfully!');
    		//Mail::to('pyonepyonemaw5@gmail.com')->send(new Category($category));
    	});
    	static::updated(function($category){
    		session()->flash("message",'Category has updated successfully!');
        	//Mail::to('pyonepyonemaw5@gmail.com')->send(new CategoryUpdated($category));
    	});
    	static::deleted(function($category){
    		session()->flash("message",'Category has deleted successfully!');
        	//Mail::to('pyonepyonemaw5@gmail.com')->send(new CategoryDeleted($category));
    	});
    }

     public function receipe()
    {
        return $this->hasMany(Receipe::class);
    }
}
