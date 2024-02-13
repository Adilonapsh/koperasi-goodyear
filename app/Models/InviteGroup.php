<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Auth;


class InviteGroup extends Model
{
    use HasFactory;

    protected $table = "tbl_invite_group";
    protected $guarded = ["id"];

    public static function booted(){
            static::creating(function ($model) {
                $model->user_id = Auth::user()->id;
            });
        }
}
