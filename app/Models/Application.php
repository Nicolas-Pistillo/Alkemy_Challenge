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
        'price',
        'description',
        'logo_url',
        'created_by'
    ];

    public function developer() {
        return $this->belongsTo(User::class,'created_by');
    }

    public function getCategory() {
        return $this->belongsTo(Category::class,'category');
    }
}
