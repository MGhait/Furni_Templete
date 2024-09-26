<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    use HasFactory;

    public function contacts():HasMany
    {
        // if table the forign key is named correctly
        return $this->hasMany(Contact::class);
        
        //if not you need to define it as below 
        // return $this->hasMany(Contact::class, 'my_foringkey_id', 'id');
        
    }
}
