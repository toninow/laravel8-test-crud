<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status',
    ];

    //relacion uno a muchos polimorfica
    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }
}
