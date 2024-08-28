<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable  = ['trans_code', 'trans_name', 'trans_total_price', 'trans_paid', 'trans_change', 'trans_date'];
}
