<?php

namespace App\Models;

use App\Models\Job;
use App\Models\User;
use App\Models\Coverletter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'validated',
        
    ];

    
    public static function boot(){

        parent::boot();
        static::creating(function($model){
            $model->user_id=auth()->user()->id;
        });
    }



    public function job(){
        $this->belongsTo('Job');
    }
    public function user(){
        $this->belongsTo('User');
    }

    public function coverletter(){
        $this->hasOne('Coverletter');
    }
}


