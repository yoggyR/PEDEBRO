<?php

namespace App\Models;

use App\Models\Bridges;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Locations extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function loBridges()
    {
        return $this->hasMany(Bridges::class);
    }
}
