<?php

namespace App\Livewire;

use App\Models\Deduction;
use Livewire\Component;
use Auth;
use Carbon\Carbon;

class DataPotonganKoperasiLayouts extends Component
{
    public $bulan, $tahun;

    public $is_table_loaded = false;
    public $data_terpotong = [];
    public $deductionData = [];
    public $yearAvailable = [];

    public function mount()
    {
        $this->yearAvailable = Deduction::with("member","group")->where("cc","0".Auth::user()->cc)->distinct("tanggal")->get()->map(function($x){
            return Carbon::parse($x->tanggal)->format("Y");
        });
    }

    public function showTable()
    {
        $this->is_table_loaded = true;
        $query = Deduction::query()->with("member","group")->where("cc","0".Auth::user()->cc);
        ($bulan) ?? $query->whereMonth("tanggal",$this->bulan);
        ($tahun) ?? $query->whereYear("tanggal",$this->tahun);
        $this->deductionData = collect($query->get())->groupBy("group.desc");
    }


    public function render()
    {
        return view('livewire.data-potongan-koperasi-layouts');
    }
}
