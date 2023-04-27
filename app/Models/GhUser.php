<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GhUser extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];
   
    /**
     * Get all of the repositories for the GhUser
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function repositories(): HasMany
    {
        return $this->hasMany(GhRepository::class, 'id', 'gh_user_id');
    }
}