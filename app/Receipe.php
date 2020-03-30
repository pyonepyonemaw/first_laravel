<?php

namespace App;
use App\Events\ReceipeCreatedEvent;
use App\Category;
use App\Mail\ReceipeStore;
use App\Mail\ReceipeUpdated;
use App\Mail\ReceipeDeleted;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Receipe extends Model
{
    protected $table = 'receipes';
    protected $fillable = ['name', 'ingredient', 'category','author_id'];
    // protected $guarded = [];
    public $dispatchesEvents = [
        'created' => ReceipeCreatedEvent::class,
    ];

    protected static function boot(){
    	parent::boot();
    	static::created(function($receipe){
    		session()->flash("message",'Receipe has created successfully!');
    	});
    	static::updated(function($receipe){
    		session()->flash("message",'Receipe has updated successfully!');
        	Mail::to('pyonepyonemaw5@gmail.com')->send(new ReceipeUpdated($receipe));
    	});
    	static::deleted(function($receipe){
    		session()->flash("message",'Receipe has deleted successfully!');
        	Mail::to('pyonepyonemaw5@gmail.com')->send(new ReceipeDeleted($receipe));
    	});
    }

    public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }
}
