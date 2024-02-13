<?php

namespace App\Imports\Sheets;

use App\Models\Simpanan;
use Illuminate\Support\Collection;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Maatwebsite\Excel\Concerns\ToCollection;

class SheetsSimpanan implements ToCollection
{
    use LivewireAlert;

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $columnName = $collection->first();
        foreach($collection as $key => $item){
            $data=[];
            if($key != 0){
                foreach($item as $i => $value){
                    $data[strtolower($columnName[$i])] = $value;
                }
                Simpanan::updateOrCreate(["cc" => $item[0]],$data);
            }
        }
    }
}
