<?php

namespace App\Models;

use App\Models\Bridges;
use App\Models\M_Users;
use App\Models\T_Details;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class T_Headers extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function heDetails()
    {
        return $this->hasOne(T_Details::class);
    }

    public function heBridges()
    {
        return $this->belongsTo(Bridges::class);
    }
    public function heUsers()
    {
        return $this->belongsTo(M_Users::class);
    }
    
}
