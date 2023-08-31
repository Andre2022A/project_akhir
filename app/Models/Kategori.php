<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Kategori extends Model
{
    use AutoNumberTrait;

    public function getAutoNumberOptions()
    {
        return [
            'id_kategori' => [
                'format' => 'Ktg?', // autonumber format. '?' will be replaced with the generated number.
                'length' => 3 // The number of digits in an autonumber
            ]
        ];
    }
    use HasFactory;

    protected $table = 'tbl_kategori';
        protected $guarded =[];

}
