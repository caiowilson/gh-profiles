<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GhRepository extends Model
{
    // use HasFactory;

    /**
     * Get the GhUser that owns the GhRepository
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function GhUser(): BelongsTo
    {
        return $this->belongsTo(GhUser::class, 'gh_user_id', 'gh_id');
    }
}
