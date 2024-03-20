<?php

namespace App\Imports\Sheets;

use App\Models\InviteGroup;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class SheetsInviteGroup implements ToCollection
{
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
                InviteGroup::create($data);
            }
        }
    }
}
