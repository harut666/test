<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;// для умного удаления
    protected $table = 'posts';

    protected $guarded =false;//or $guarded = [] empty massiv , or fillable=['title','content']....

}
