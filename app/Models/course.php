<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses');
    }
}
