<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarriageData extends Model
{
    use HasFactory;

    protected $table = 'marriage_data';
    protected $fillable = ['document', 'bride_name', 'groom_name', 'marriage_date'];
}
