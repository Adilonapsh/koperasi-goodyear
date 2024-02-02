<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    use HasFactory;

    protected $table = "tbl_deduction";


    public function member()
    {
        return $this->belongsTo(User::class, 'cc', 'cc');
    }

    public function group()
    {
        return $this->hasOne(InviteGroup::class, 'group', 'id');
    }
}
