<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Application;

class Buy extends Model
{
    use HasFactory;

    protected $fillable = [
        'client',
        'app'
    ];

    public function getClient() {
        return $this->hasMany(User::class,'client');
    }

    public function getApp() {
        return $this->belongsTo(Application::class,'app');
    }
}
