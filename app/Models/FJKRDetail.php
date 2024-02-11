<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FJKRDetail extends Model
{
    use HasFactory;
    protected $table = "fjkr_detail";

    public function fk_barang() {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }

}
