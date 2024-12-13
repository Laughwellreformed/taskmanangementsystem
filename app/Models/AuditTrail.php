<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AuditTrail extends Model
{
    protected $fillable = ['action', 'details', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}