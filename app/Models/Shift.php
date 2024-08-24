<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'name',
        'clock_in_time',
        'clock_out_time',
        'early_clock_in_time',
        'allow_clock_out_till',
        'late_mark_after,'
    ];
}
