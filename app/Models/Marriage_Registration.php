<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marriage_Registration extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'MR_ID',
        'MR_Jurunikah_Name',
        'MR_Payment_Receipt',
        'MR_Receipt_Proof',
        'MR_Time_Nikah',
        'MR_Lafaz_Taliq',
        'MR_Submit_Status',
        'MR_Approval_Status',
        'MR_Approval_Date',
        'U_IC_No',
        'request_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'MR_suami_ic', 'ic');
    }
    public function mohon()
    {
        return $this->belongsTo(Marriage_Request::class,'request_id', 'Slip_Mohon_Online');
    }
   
}
