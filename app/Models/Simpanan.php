<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Simpanan extends Model
{
    use HasFactory;
    protected $table = "tbl_simpanan";

    public function member() : BelongsTo
    {
        return $this->belongsTo(User::class, 'cc', 'cc');
    }
}
