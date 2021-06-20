<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bahanbaku extends Model
{
    use HasFactory;
    protected $table="bahan_baku";
    public $timestamps = false;
    protected $fillable = ['id_bahan_baku','nama_bahan_baku', 'stock_bahan_baku', 'harga_bahan_baku', 'deskripsi_bahan_baku'];
    protected $primaryKey = 'id_bahan_baku';
    public $incrementing = false;
}
