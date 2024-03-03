<?php

namespace App\Livewire;

use App\Models\Simpanan;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DataSimpananLayout extends Component
{

    public
        $simpanan,
        $is_table_loaded = false;

    public $data = [
        "saldo_utama" => "",
        "januari" => "",
        "februari" => "",
        "maret" => "",
        "april" => "",
        "mei" => "",
        "juni" => "",
        "juli" => "",
        "agustus" => "",
        "september" => "",
        "oktober" => "",
        "november" => "",
        "desember" => "",
        "total_tahun_ini" => "",
        "total_saldo_awal_tahun_ini" => ""
    ];

    public $tbl_simpanan = [
        "Simpanan Wajib" => "wajib",
        "Simpanan Sukarela" => "rela",
        "Simpanan Perumahan" => "ykg",
        "Simpanan Dana Sosial" => "sosial",
        "Simpanan Pengambilan" => "ambil",
    ];

    public function loadData()
    {
        $simpanan = $this->simpanan;
        $tbl_simpanan = $this->tbl_simpanan;
        if (!$simpanan){
            foreach ($this->data as $key => $value) {$data[$key] = "";}
            $this->is_table_loaded = false;
            return;
        }
        $this->data = Simpanan::with("member")->where("cc",Auth::user()->cc)->get()->map(function($x) use ($tbl_simpanan, $simpanan){
            $item["saldo_utama"] = $x["ytd_".$tbl_simpanan[$simpanan]];
            $item["januari"] = $x["mtd_".$tbl_simpanan[$simpanan]."01"];
            $item["februari"] = $x["mtd_".$tbl_simpanan[$simpanan]."02"];
            $item["maret"] = $x["mtd_".$tbl_simpanan[$simpanan]."03"];
            $item["april"] = $x["mtd_".$tbl_simpanan[$simpanan]."04"];
            $item["mei"] = $x["mtd_".$tbl_simpanan[$simpanan]."05"];
            $item["juni"] = $x["mtd_".$tbl_simpanan[$simpanan]."06"];
            $item["juli"] = $x["mtd_".$tbl_simpanan[$simpanan]."07"];
            $item["agustus"] = $x["mtd_".$tbl_simpanan[$simpanan]."08"];
            $item["september"] = $x["mtd_".$tbl_simpanan[$simpanan]."09"];
            $item["oktober"] = $x["mtd_".$tbl_simpanan[$simpanan]."10"];
            $item["november"] = $x["mtd_".$tbl_simpanan[$simpanan]."11"];
            $item["desember"] = $x["mtd_".$tbl_simpanan[$simpanan]."12"];
            $item["updated_at"] = $x["updated_at"];

            $valuesToExclude = [-1];
            $filteredItem = array_diff($item, $valuesToExclude);

            $item["total_tahun_ini"] = array_sum($filteredItem);
            $item["total_saldo_awal_tahun_ini"] = array_sum($filteredItem);
            return $item;
        })->first();
        $this->is_table_loaded = true;
    }

    public function render()
    {
        return view('livewire.data-simpanan-layout');
    }
}
