<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded('id_petugas')]
class Petugas extends Model
{
    protected $primaryKey = 'id_petugas';
    protected $table = 'petugas';
}
