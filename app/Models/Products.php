<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable=[
        'pName',
        'price', 
        'quntity', 
        'desc', 
        'image',
        'role'
    ];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}
