<?php

namespace App\Models;

use App\Models\Bridges;
use App\Models\M_Levels;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Jobs extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function joBridges()
    {
        return $this->hasMany(Bridges::class);
    }

    public function joLevels()
    {
        return $this->belongsToMany(M_Levels::class);
    }

}
