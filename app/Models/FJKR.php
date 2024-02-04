<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FJKR extends Model
{
    use HasFactory;

    protected $table = "fjkr";

    public function member() : BelongsTo
    {
        return $this->belongsTo(User::class, 'cc', 'cc');
    }
}
