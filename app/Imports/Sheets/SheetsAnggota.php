<?php

namespace App\Imports\Sheets;

use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;

class SheetsAnggota implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach($collection as $key => $item){
            if($key != 0){
                $data =[
                    'name'=> $item[1],
                    'username' => Str::lower(Str::replace(' ', '_', $item[1]) . $item[0]),
                    'email' => Str::lower(Str::replace(' ', '_', $item[1]) . $item[0] . '@admin.com'),
                    'password' => Hash::make($item[11]),
                    'cc' => $item[0],
                    'min_belanja' => $item[2],
                    'maks_ds' => $item[3],
                    'pinjaman_sebelumnya' => $item[4],
                    'total_belanja' => $item[5],
                    'sisa_lalu' => $item[6],
                    'ket' => $item[7],
                    'plafon' => $item[8],
                    'pk' => $item[9],
                    'saldo' => $item[10],
                ];
                User::updateOrCreate(["cc" => $item[0]],$data);
            }
        }
    }
}
