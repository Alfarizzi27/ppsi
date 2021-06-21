<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class riwayatpenjualan extends Model
{
    use HasFactory;
    protected $table="laporan_penjualan";
    public $timestamps = false;
    protected $fillable = ['id_penjualan','id_keuangan', 'tanggal_penjualan', 'jumlah_pembelian', 'harga_jual_produk', 'total_harga'];
    protected $primaryKey = 'id_penjualan';
}
