<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $table="produk";
    public $timestamps = false;
    protected $fillable = ['id_produk','nama_produk', 'stock_produk', 'harga_produk', 'deskripsi_produk'];
    protected $primaryKey = 'id_produk';
    public $incrementing = false;
}
