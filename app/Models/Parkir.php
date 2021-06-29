<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Parkir extends Model
{
    //menegaskan isi table tyang harus di isi
    protected $fillable = [
        'id','palt_nomor', 'jenis_kendaraan', 'foto', 'harga', 'created_at','updated_at'
    ];
    //tabel parkir
    protected $table = "parkir";

}
