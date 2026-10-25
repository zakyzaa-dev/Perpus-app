<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Model;

#[Guarded('id_buku')]
class Buku extends Model
{
    protected $primaryKey = 'id_buku';
    protected $table = 'buku';
}
