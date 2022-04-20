<?php

namespace App\Models;

use App\Models\M_Jobs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Levels extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function M_Jobs()
    {
        return $this->hasMany(M_Jobs::class);
    }
}
