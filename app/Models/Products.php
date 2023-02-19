<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'product_specification',
        'product_type',
        'product_qty',
    ];



    public function productRequest()
    {
        return $this->belongsTo(ProductRequest::class);
    }
}
