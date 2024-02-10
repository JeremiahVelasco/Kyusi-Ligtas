<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable =  [
        'title'
    ];

    public $timestamps = false;

    public function incident()
    {
        return $this->hasMany(Incident::class);
    }
}
