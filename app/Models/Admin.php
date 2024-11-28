<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Admin extends Model
{
    protected $fillable = ['admin_name', 'admin_email', 'admin_password'];
    protected $hidden = ['admin_password'];

    public function admin(): HasOne {
        return $this->hasOne(Player::class);
    }
}
