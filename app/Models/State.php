<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $table = 'states';
    protected $fillable = ['country_id','name'];

    public function employees(){
        return $this->hasMany(Employee::class);
    }
    public function country(){
        return $this->belongsTo(Country::class);
    }
}
