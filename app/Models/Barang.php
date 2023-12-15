<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table='barang';
    protected $primary_key='id';
    protected $fillable=[
        'nama_barang',
        'varian_barang',
        'harga_beli',
        'qty',
        'tanggal_kadaluarsa',
        'tanggal_produksi',
        'no_barang'
    ];
}
