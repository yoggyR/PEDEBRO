<?php

namespace App\Models;

use App\Models\M_Jobs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Levels extends Model
{
    use HasFactory;
    protected $table        = 'm__levels';
    protected $primaryKey   = 'pk_level_id';
    protected $guarded = [];
    public function leBridges()
    {
        return $this->hasMany(Bridges::class);
    }
}
