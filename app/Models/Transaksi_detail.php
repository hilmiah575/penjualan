<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Transaksi_detail extends Model
{
    use AutoNumberTrait;

      public function getAutoNumberOptions()
      {
        return[
            'id_transaksi_detail'=>[
                'format'=>'tdl?',
                'lenght'=> 3
            ]

         ];
      }

    use HasFactory;
    protected $table='tbl_transaksi_detail';
    protected $guarded = [];
}
