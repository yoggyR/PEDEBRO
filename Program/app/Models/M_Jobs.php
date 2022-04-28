<?php

namespace App\Models;

use App\Models\Bridges;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Jobs extends Model
{
    use HasFactory;
    protected $table        = 'm__jobs';
    protected $primaryKey   = 'pk_job_id';
    protected $dates        = ['date_created', 'closing_date'];
    protected $guarded      = [];
    public function joBridges()
    {
        return $this->hasMany(Bridges::class);
    }
}
