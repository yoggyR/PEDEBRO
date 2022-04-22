<?php

namespace App\Models;

use App\Models\T_Headers;
use App\Models\M_Documents;
use App\Models\M_Positions;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Users extends Model
{
    use HasFactory;
    protected $table        = 'm__users';
    protected $primaryKey   = 'pk_user_id';
    protected $dates        = ['date_of_brith'];
    protected $guarded      = [];

    public function usDocuments()
    {
        return $this->hasOne(M_Documents::class);
    }
    public function usheaders()
    {
        return $this->hasMany(T_Headers::class);
    }

    public function usPositions()
    {
        return $this->belongsTo(M_Positions::class, 'fk_position_id', 'pk_position_id');
    }
}
