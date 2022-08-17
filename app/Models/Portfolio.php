<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = "portfolios";

    protected $primaryKey = 'id';

    protected $fillable = ['title', 'img', 'text'];

    public function categories(): HasManyThrough
    {
        return $this->hasManyThrough(
            Category::class,
            CatPort::class,
            'port_id',
            'id',
            'id',
            'cat_id'
        );
    }
}
