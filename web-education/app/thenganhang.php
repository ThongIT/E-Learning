<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thenganhang extends Model
{
     protected $table ="the_ngan_hang";

     public function nguoiDung()
     {
          return $this->belongsTo('App\nguoidung','nguoi_dung_id');
     }
}
