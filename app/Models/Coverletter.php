<?php

namespace App\Models;

use App\Models\Mission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Coverletter extends Model
{
    use HasFactory;
    protected $fillable = [
        'mission_id',
        'content',
        
    ];
    public function mission(){
        $this->belongsTo('Mission');
    }
}

