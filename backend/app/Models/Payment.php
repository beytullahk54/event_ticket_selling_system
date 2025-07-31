<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'total_amount', 'cc_number', 'cc_exp_month', 'cc_exp_year', 'cc_exp_cvv'];
}