<?php

namespace App\Models\Ticket;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    protected $fillable = ['name'];

    protected $table = "categories";

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
