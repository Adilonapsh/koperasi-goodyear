<?php

namespace App\Livewire;

use Livewire\Component;

class DataPotonganKoperasiLayouts extends Component
{
    public $bulan, $tahun;

    public $is_table_show = false;
    public $data_terpotong = [];

    public function mount()
    {
        //
    }

    public function showTable()
    {
        $this->is_table_show = true;
    }


    public function render()
    {
        return view('livewire.data-potongan-koperasi-layouts');
    }
}
