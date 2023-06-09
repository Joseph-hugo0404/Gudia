<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name','type','net_worth','address'];

    public function user() {
        return $this->belongsTo('App\Models\User');
    }

    public function members() {
        return $this->hasMany('App\Models\Member');
    }
}
