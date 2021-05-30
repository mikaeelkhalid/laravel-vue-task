<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $guareded = [];

    public function sales_guy()
    {
        return $this->belongTo(SalesGuy::class);
    }
}
