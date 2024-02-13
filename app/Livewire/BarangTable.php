<?php

namespace App\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Barang;
use Illuminate\Contracts\Database\Eloquent\Builder;

class BarangTable extends DataTableComponent
{
    protected $model = Barang::class;

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            // Column::make("Id", "id")
            //     ->sortable(),
            Column::make("Kode Barang", "kode_barang")
                ->searchable()
                ->sortable(),
            Column::make("Nama Barang", "nama_barang")
                ->searchable(function(Builder $query, $searchTerm){
                    $data = $query->orWhere("nama_barang",'ilike','%'.$searchTerm.'%');
                    return $data;
                })
                ->sortable(),
            Column::make("Satuan", "satuan")
                ->sortable(),
            Column::make("Harga Jual", "harga_jual")
                ->format(function($data){
                    return ($data) ? "Rp. ". number_format($data,0) : "Rp. 0";
                })
                ->sortable(),
            Column::make("Dibuat pada", "created_at")
                ->sortable(),
            Column::make("Diupdate pada", "updated_at")
                ->sortable(),
        ];
    }
}
