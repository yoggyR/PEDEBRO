<?php

namespace App\Models;

use App\Models\Bridges;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Jobs extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Bridges()
    {
        return $this->hasMany(Bridges::class);
    }
}
