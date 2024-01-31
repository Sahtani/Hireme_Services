<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categoryModel;

class serviceModel extends Model
{
    use HasFactory;

    public function category() {
        return $this->belongsTo(categoryModel::class, "cat_id", "id");
    }
}
