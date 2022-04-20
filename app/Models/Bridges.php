<?php

namespace App\Models;

use App\Models\T_Headers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bridges extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function T_Headers()
    {
        return $this->hasMany(T_Headers::class);
    }
}
