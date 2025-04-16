<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    //
    public $table = 'pengaduan';
	public $primaryKey = 'id_pengaduan';
	public $fillable = ['nama_pelapor','email_pelapor','no_telp_pelapor','alamat_pelapor','tempat_kejadian','tanggal_kejadian','materi','terlapor','kronologi','tindak_lanjut','tiket_pengaduan'];
	
}
