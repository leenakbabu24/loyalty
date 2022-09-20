<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class cart extends Model
{
    use HasFactory;
    public function getSubtotal($table,$id)
    {
        return DB::table($table)->select(DB::raw("SUM(total) as res"))->where('user_id',$id)->where('status',"cart")->get();
    }
    public function getSubtotalvalue($table,$id)
    {
        return DB::table($table)->select(DB::raw("SUM(total) as res"))->where('user_id',$id)->where('status',"cart")->value('res');
    }
}
