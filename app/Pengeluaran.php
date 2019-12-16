<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    protected $table = "pengeluaran";

    
    protected $fillable = ['deskripsi_pekerjaan', 'vol', 'satuan', 'harga_satuan', 'jumlah_harga'];
}
