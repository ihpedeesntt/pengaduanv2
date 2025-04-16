<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    //
    public $table = 'aspirasi';
	public $primaryKey = 'id_aspirasi';
	public $fillable = ['nama_aspirasi','email_aspirasi','no_telp_aspirasi','alamat_aspirasi','instansi_aspirasi','judul_aspirasi','isi_aspirasi','tindak_lanjut','tiket_aspirasi'];

}
