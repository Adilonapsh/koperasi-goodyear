<?php

namespace App\Livewire;

use App\Models\FJKR;
use App\Models\FJKRDetail;
use Livewire\Component;
use Auth;

class DataTransaksiKonsumsiLayouts extends Component
{
    public $fjkrDetail = [];

    public function mount(){
        $this->fjkrDetail = FJKR::with(
            [
                "fjkrDetail"=> function($query){
                    $query->with("fk_barang")->get();
                }
            ]
        )->where("cc","0".Auth::user()->cc)->get();
    }

    public function render()
    {
        return view('livewire.data-transaksi-konsumsi-layouts');
    }
}
