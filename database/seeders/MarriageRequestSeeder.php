<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MarriageRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tableName = 'Marriage_Mohon';

        $datas = [
            [
                'U_IC_No' => '111111111111',
                'Birthday' => "11/11/1998",
                'Age' => "26",
                'Ethnic' => "MELAYU",
                'Nationality' => "MALAYSIA",
                'IC_Address' => '123-A, TAMAN TAS, KUANTAN, PAHANG',
                'Current_Address' => '123-A, TAMAN TAS, KUANTAN, PAHANG',
                'Home_Num' => "037809990",
                'Edu_Level' => "SPM",
                'Employment_Sector' => "EDUCATION",
                'Job' => "LECTURER",
                'Job_Address' => "21-A, UMP",
                'Office_Phone' => "0114108809",
                'Amount_Salary' => "5000",
                'Marriage_Status' => "BUJANG",
                'PrepCourse_ID' => "PC012",
                'Status_Saudara_Baru' => "BAPA",
                'Request_Status' => "SUBMITED",

                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'Date_Request' => Carbon::now(),
                'Date_Nikah' => Carbon::now(),
                'Marriage_Place' => "KUANTAN",
                'Marriage_Country' => "MALAYSIA",
                'Marriage_Place_Address' => "37-S, KUANTAN",
                'Marriage_Dowry_Type' => "TUNAI",
                'Marriage_Dowry' => "2000",
                'Other_Grants' => "100",
                'W_IC_No' => "990202020201",
                'W_Name' => "KALIB",
                'W_Address' => "123A, Jln ABC",
                'W_Category_Nikah' => "WALI NASAB",
                'W_Phone' => "017121212",

                'Pasangan_IC_No' => "011011020202",
                'P_Name' => "SITI BINTI KALIB",
                'P_Date_of_Birth' => "11/10/2001",
                'P_Age' => "23",
                'P_Ethnic' => "MELAYU",
                'P_Rationality' => "MALAYSIA",
                'P_IC_Address' => "2, Kg. Besar",
                'P_Current_Address' => "2, Kg. Besar",
                'P_Home_Num' => "027802323",
                'P_Edu_Level' => "IJAZAH",
                'P_Employment_Sector' => "EDUCATION",
                'P_Job' => "TEACHER",
                'P_Job_Address' => "A2, SMK KUANTAN",
                'P_Office_Phone' => "037604545",
                'P_Amount_Salary' => "3300",
                'P_Spouse_Name' => "Hafiz",
                'P_Marriage_Status' => "BUJANG",
                'P_PrepCourse_ID' => "PC0002",
                'P_Status_Saudara_Baru' => "SUBMITED",
                'P_Date_Convert_Islam' => "11/10/2001",
                'P_Islam_Register_No' => "I123121",
                'P_Marriage_Couple_License__No' => "12312",
                'P_Phone_No' => "0134897223",

                'Saksi1_Name' => "Ahmad",
                'Saksi1_IC_No' => "212121212121",
                'Saksi1_Age' => "45",
                'Saksi1_Address' => "23, Tg. Butan",
                'Saksi1_Phone' => "014121212",

                'Saksi2_Name' => "Hasan",
                'Saksi2_IC_No' => "121212121212",
                'Saksi2_Age' => "30",
                'Saksi2_Address' => "7, Taman Summer",
                'Saksi2_Phone' => "013121212",
            ],
        ];

        foreach ($datas as $key => $value) {
            DB::table($tableName)->insert($value);
        }
    }
}
