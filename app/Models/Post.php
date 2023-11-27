<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function getPaginateByLimit(int $limit_count = 10)
    {//updated_atで降順に並べた後、limitで件数制限を掛ける。
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
