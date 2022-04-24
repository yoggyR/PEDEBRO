<?php

namespace App\Models;

use App\Models\M_Users;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_Documents extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function doUsers()
    {
        return $this->belongsTo(M_Users::class);
    }
}
