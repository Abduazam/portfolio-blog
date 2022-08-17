<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CatPort extends Model
{
    use HasFactory;

    protected $table = 'cat_ports';

    protected $primaryKey = 'id';

    protected $fillable = ['cat_id', 'port_id'];

    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class, 'port_id');
    }

    public function categories(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
