<?php

namespace App\Models;

use App\Models\T_Headers;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class T_Details extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function deHeaders()
    {
        return $this->belongsTo(T_Headers::class);
    }
}
