<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    use HasFactory;

    protected $withCount = ["recipes"];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}
