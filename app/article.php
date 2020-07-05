<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class article extends Model
{
    //
    public static function get_all()
    {
        return DB::table('articles')->orderBy('id', 'DESC')->get();
    }

    public static function get_id($id)
    {
        return DB::table('articles')->where('id',$id)->get();
    }

    public static function insert($data)
    {
        return DB::table('articles')->insert($data);
    }

    public static function update_tbl($data)
    {
        return DB::table('articles')->where('id',$data['id'])->update($data);
    }

    public static function delete_tbl($id)
    {
        return DB::table('articles')->delete($id);
    }
}

