<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncidentType extends Model
{
    use HasFactory;

    protected $fillable = [
        'title'
    ];

    public static $types = ['🚒Fire Emergency', '🚓Police Emergency', '🚑Medical Emergency'];

    public function incident()
    {
        return $this->hasMany(Incident::class);
    }
}
