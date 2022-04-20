<?php

namespace App\Models;

use App\Models\T_Details;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class T_Headers extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function T_Details()
    {
        return $this->hasOne(T_Details::class);
    }
}
