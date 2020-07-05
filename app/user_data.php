<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class user_data extends Model
{
    protected $table = 'user_datas';

    protected $fillable = [
        'user_id',
    ];
    public static function insert($data)
    {
        return DB::table('user_datas')->insert($data);
    }
}
