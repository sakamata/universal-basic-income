<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $table = 'histories';

    /**
     * 日時表記変更の ->format('Y-m-d') を使いたいカラム名を指定する
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
