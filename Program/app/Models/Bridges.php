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
        return $this->belongsTo(M_Jobs::class, 'fk_job_id', 'pk_job_id');
    }
    public function brLevels()
    {
        return $this->belongsTo(M_Levels::class, 'fk_level_id', 'pk_level_id');
    }
    public function brEducations()
    {
        return $this->belongsTo(M_Educations::class, 'fk_education_id', 'pk_education_id');
    }
    public function brLocations()
    {
        return $this->belongsTo(M_Locations::class, 'fk_location_id', 'pk_location_id');
    }
}
