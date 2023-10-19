<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $fillable = [
        'title' , 'name', 'email' , 'major_id'  , 'image' , 'bio'
    ] ;
    public function major(){
        return $this->belongsTo(Major::class , 'major_id', 'id') ;
    }
}
