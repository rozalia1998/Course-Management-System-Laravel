<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class course extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price'
    ];

    protected $dates = ['deleted_at'];
    public function course()
    {
        return $this->belongsToMany(course::class, 'user_courses');
    }
   
}
