<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Inspection extends Model
{
    use HasFactory;

    protected $fillable = ['recorder_id', 'inspection_date', 'disk_status', 'firmware_version', 'uptime', 'notes'];

    public function recorder()
    {
        return $this->belongsTo(Recorder::class);
    }
}

