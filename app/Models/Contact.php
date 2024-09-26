<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    // to connect a model with a table with defferent name (NOT Best Practice)
    // protected $table = 'tableName';
    protected $fillable = ['first_name', 'last_name', 'email', 'message', 'category_id'];

    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class);
        
    }
}
