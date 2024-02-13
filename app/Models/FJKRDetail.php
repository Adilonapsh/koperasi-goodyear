<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;


class FJKRDetail extends Model
{
    use HasFactory;
    protected $table = "fjkr_detail";
    protected $guarded = ["id"];

    public function fk_barang() {
        return $this->belongsTo(Barang::class, 'kode_barang', 'kode_barang');
    }

    // public static function booted(){
    //     static::creating(function ($model) {
    //         $model->user_id = Auth::user()->id;
    //     });
    // }
}
