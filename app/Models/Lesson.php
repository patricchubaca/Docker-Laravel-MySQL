<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    protected $fillable = [
        'module_id',
        'name',
        'video'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}