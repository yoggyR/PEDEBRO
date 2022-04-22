<?php

namespace App\Models;

use App\Models\M_Jobs;
use App\Models\T_Headers;
use App\Models\M_Locations;
use App\Models\M_Educations;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bridges extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function brHeaders()
    {
        return $this->hasMany(T_Headers::class);
    }

    public function brJobs()
    {
        return $this->belongsToMany(M_Jobs::class);
    }
    public function brEducations()
    {
        return $this->belongsToMany(M_Educations::class);
    }
    public function brLocations()
    {
        return $this->belongsToMany(M_Locations::class);
    }


}
