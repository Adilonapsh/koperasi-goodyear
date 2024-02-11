<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FJKR extends Model
{
    use HasFactory;

    protected $table = "fjkr";

    public function member() : BelongsTo
    {
        return $this->belongsTo(User::class, 'cc', 'cc');
    }

    public function fjkrDetail() : HasMany
    {
        return $this->hasMany(FJKRDetail::class,"no_fj","no_fj");
    }
}
