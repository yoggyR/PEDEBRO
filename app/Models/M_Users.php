<?php

namespace App\Models;

use App\Models\T_Headers;
use App\Models\M_Documents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Users extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function M_Documents()
    {
        return $this->hasOne(M_Documents::class);
    }
    public function T_Headrs()
    {
        return $this->hasMany(T_Headers::class);
    }
}
