<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Player extends Model
{

    use HasFactory;

    protected $fillable = ['player_name', 'username', 'player_password', 'student_id_number'];
    protected $hidden = ['player_password'];

    public function admin(): BelongsTo {
        return $this->belongsTo(Admin::class);
    }



}