<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function scopeUnfinished($query) {
        return $query->where('done', 0);
    }
    public function scopeDone($query) {
        return $query->where('done', 1);
    }
}


$task = new Task();