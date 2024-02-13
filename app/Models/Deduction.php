<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Auth;


class Deduction extends Model
{
    use HasFactory;

    protected $table = "tbl_deduction";
    protected $guarded = ["id"];

    protected $fillable = [
        "active",
        "tanggal",
        "cc",
        "bulan",
        "group_id",
        "principal",
        "interest",
        "original",
        "balance",
        "paytime",
        "repaytime",
        "aruded",
        "dedprin",
        "user_id",
    ];

    public function member() : BelongsTo
    {
        return $this->belongsTo(User::class, 'cc', 'cc');
    }

    public function group() : HasOne
    {
        return $this->hasOne(InviteGroup::class, 'id', 'group_id');
    }

    public static function booted(){
        static::creating(function ($model) {
            $model->user_id = Auth::user()->id;
        });
    }
}
