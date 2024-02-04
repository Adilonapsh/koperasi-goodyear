<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = "tbl_barang";

    protected $fillable = [
        'kode_barang',
        'nama_barang',
        'harga_jual',
        'satuan',
        'user_id',
    ];

    public function member() : BelongsTo
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
