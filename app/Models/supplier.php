<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;
    protected $keyType = "string";
    protected $table="supplier";
    public $timestamps = false;
    protected $fillable = ['id_supplier','nama_supplier', 'alamat_supplier', 'telepon'];
    protected $primaryKey = 'id_supplier';
}
