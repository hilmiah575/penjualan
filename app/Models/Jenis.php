<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Jenis extends Model
{
    use AutoNumberTrait;

      public function getAutoNumberOptions()
      {
        return[
            'id_jenis'=>[
                'format'=>'jns?',
                'lenght'=> 3
            ]

         ];
      }

    use HasFactory;
    protected $table='tbl_jenis';
    protected $guarded = [];
}
