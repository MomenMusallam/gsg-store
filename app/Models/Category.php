<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $fillable = [
        'name', 'slug', 'parent_id', 'status', 'description',
    ];

    public function getNameAttribute($value)
    {
        if ($this->trashed()) {
            return $value . ' (Deleted)';
        }
        return $value;
    }

    public function getOriginalNameAttribute()
    {
        return $this->attributes['name'];
    }

}
