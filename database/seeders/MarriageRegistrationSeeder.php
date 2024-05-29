<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marriage_Registration;

class MarriageRegistrationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'MR_ID' => 1,
                'MR_Jurunikah_Name' => 'Ali',
                'MR_Payment_Receipt' => 'R001',
                'MR_Lafaz_Taliq' => 'Ya',
                'MR_Approval_Date' => '2024-05-21',
                'MR_Approval_Status' => 'LULUS',
                'MR_Submit_Status' => 'Submitted',
                'U_IC_No' => '111111111111',
                'request_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
         
        ];

        foreach ($datas as $key => $value) {
            Marriage_Registration::create($value);
        }
    }
}
