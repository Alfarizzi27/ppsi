<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengadaan extends Model
{
    use HasFactory;
    protected $keyType = "string";
    protected $table="pengadaan";
    public $timestamps = false;
    protected $fillable = ['id_pengadaan','id_bahan_baku','tanggal_pengadaan','jumlah_pengadaan','harga_pengadaan','supplier'];
    protected $primaryKey = 'id_pengadaan';
}
