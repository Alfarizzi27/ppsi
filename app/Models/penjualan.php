<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $table="pemesanan_produk";
    public $timestamps = false;
    protected $fillable = ['id_pemesanan','id_penjualan	nama_pesanan','pemesanan_jenis_barang','tanggal_pemesanan','jumlah_pemesanan','keterangan_pemesanan'];
    protected $primaryKey = 'id_pemesanan';
}
