<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;
use App\Models\Image;

class Animal extends Model
{
    use HasFactory;

    public function owners()
    {
        return $this->belongsTo(Owner::class);
    }

    public function images()
    {
        return $this->belongsTo(Image::class);
    }
}
