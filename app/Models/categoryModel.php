<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\serviceModel;

class categoryModel extends Model
{
    use HasFactory;

    public function services() {
        return $this->hasMany(serviceModel::class);
    }
}
