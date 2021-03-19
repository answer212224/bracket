<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function perfectSeries()
    {
        return $this->hasMany(MemberPerfectSerie::class);
    }

    public function godSeries()
    {
        return $this->hasMany(MemberGodSerie::class);
    }
}
