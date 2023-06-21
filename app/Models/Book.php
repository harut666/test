<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;
    //свойство $table для явного указания имени таблицы, с которой будет связана модель.
    protected $table = 'books';
    //Когда значение $guarded установлено на false, это означает, что все атрибуты модели могут быть массово назначены, то есть вы можете передать массив данных для создания или обновления записи без явного указания каждого атрибута.
    protected $guarded = false;
}
