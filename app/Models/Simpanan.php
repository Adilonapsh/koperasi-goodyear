<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Auth;

class Simpanan extends Model
{
    use HasFactory;
    protected $table = "tbl_simpanan";
    protected $guarded = ["id"];

    public function member() : BelongsTo
    {
        return $this->belongsTo(User::class, 'cc', 'cc');
    }

    public static function booted(){
        static::creating(function ($model) {
            $model->user_id = Auth::user()->id;
        });
    }
}
