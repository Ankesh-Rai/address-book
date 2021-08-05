<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;

class ExcelImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $key => $value) {
            if ($key>0) 
            {
                DB::table("users_data")->insert(['name' => $value[0],'email' => $value[1],'qualification' => $value[2],'DOB' => $value[3],'DOJ' => $value[4],'rank' => $value[5],'service' => $value[6], 'posting' => $value[7],'posting_history' => $value[8],'skill' => $value[9],'reward' => $value[10],'achievement' => $value[11],'punishment' => $value[12],'number' => $value[13],'address' => $value[14],'district' => $value[15],'marital' => $value[16],'gender' => $value[17],'id_card' => $value[18],'unit' => $value[19],'picture'=>$value[20],'id_no' => $value[21],"created_at" => \Carbon\Carbon::now(), "updated_at" => \Carbon\Carbon::now()]);    
            }
        }
    }
}
