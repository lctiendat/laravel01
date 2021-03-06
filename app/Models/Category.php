<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table= 'category';
    protected $fillable = [
      'name',
      'show'
    ];
    public function newTypes(){
      return $this->hasMany(NewsType::class,'category_id');
    }

}
