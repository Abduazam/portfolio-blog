<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $array)
 * @method static where(string $string, Post $id)
 * @method static find($id)
 */
class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'text', 'img', 'view', 'status', 'created_at'];
}
