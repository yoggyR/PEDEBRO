<?php

namespace App\Models;

use App\Models\M_Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Positions extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function poUsers()
    {
        return $this->hasMany(M_Users::class,);
    }
}
