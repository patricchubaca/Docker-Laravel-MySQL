<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    protected $fillable = [
        'nottify_email',
        'role'
    ];


    public function user()
    {
        return $this->belongsTo('user');
    }
}