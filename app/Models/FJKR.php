<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FJKR extends Model
{
    use HasFactory;

    protected $table = "fjkr";

    public function member()
    {
        return $this->belongsTo(User::class, 'cc', 'cc');
    }
}
