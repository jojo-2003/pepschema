<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{
    protected $fillable = ['player_name', 'username', 'player_email', 'player_password', 'student_id_number'];
    protected $hidden = ['player_password'];

    public function admin(): BelongsTo {
        return $this->belongsTo(Admin::class);
    }
}
