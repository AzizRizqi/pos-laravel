<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesDetail extends Model
{
    use HasFactory;

    protected $table = "detail_sales";
    protected $fillable = ['sales_id', 'product_id', 'qty', 'sub_total'];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }

    public function sales(){
        return $this->belongsTo(Sales::class, 'sales_id', 'id');
    }
}
