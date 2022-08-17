<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $primaryKey = 'id';

    protected $fillable = ['title'];

    public function portfolio(): HasManyThrough
    {
        return $this->hasManyThrough(
            Portfolio::class,
            CatPort::class,
            'cat_id',
            'id',
            'id',
            'port_id'
        );
    }
}
