<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesGuy extends Model
{
    use HasFactory;

    protected $guareded = [];

    public function sales()
    {
        return $this->hasMany(Sale::class);
    }
}
