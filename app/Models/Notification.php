<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;


//   fillabel
    protected $fillable = [
        'type',
        'notifiable_id',
        'notifiable_type',
        'data',
        'read_at',
        'user_id',
    ];
    // candidature
    public function candidature()
    {
        return $this->belongsTo(Candidature::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
