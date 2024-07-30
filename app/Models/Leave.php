<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'leave_type',
        'remaining_leave',
        'date_from',
        'date_to',
        'number_of_day',
        'leave_day',
        'reason',
    ];

}
