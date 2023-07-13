<?php

namespace App;
use App\Html\Contollers\Site\CategoryController;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use softDeletes;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image'
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected static function booted() 
    {
        static::creating(function($category) {
            $category->slug = Str::slug($category->name);
        });
    }

    public function products(){

        return $this->hasMany(Product::class);

    }

}
