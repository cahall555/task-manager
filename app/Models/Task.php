<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function complete()
    {
        $this->completed_at = now();
        $this->save();
    }
    
    //use HasFactory;
}
