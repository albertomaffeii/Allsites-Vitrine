<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable =[
        'category_id',
        'name',
        'description',
        'exclusive',
        'image'
    ];

    protected $dates = [
        'deleted_at',
    ];

    public function category(){

        return $this->belongsTo(category::class);
    }
}
