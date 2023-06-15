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
    public function users()
    {
        return $this->belongsToMany(User::class, 'user_courses');
    }
}
