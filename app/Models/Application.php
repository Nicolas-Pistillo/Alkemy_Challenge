<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'category',
        'description',
        'price',
        'logo_url',
        'created_by'
    ];

    public function getDevCreator() {
        return $this->hasMany(User::class,'id');
    }
}
