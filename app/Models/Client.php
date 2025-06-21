<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Client extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'address'];

    public function recorders()
    {
        return $this->hasMany(Recorder::class);
    }
}
