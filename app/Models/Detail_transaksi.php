<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;


class Detail_transaksi extends Model
{
    use AutoNumberTrait;

    public function getAutoNumberOptions()
    {
        return [
            'id_detail_transaksi' => [
                'format' => 'Dtrx?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }
    use HasFactory;
    protected $table = 'tbl_detail_transaksi';
    protected $guarded =[];

}
