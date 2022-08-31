<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        if($filters['category'] ?? false){
          $query->where('categories', 'like', '%' . request('category') . '%');  
        }
    }
}
