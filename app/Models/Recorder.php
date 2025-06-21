<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Recorder extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'model', 'ip_address'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function inspections()
    {
        return $this->hasMany(Inspection::class);
    }
}

