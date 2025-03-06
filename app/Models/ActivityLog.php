<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityLog extends Model
{
    protected $fillable = ['user_id', 'aktivitas', 'deskripsi'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
