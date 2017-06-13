<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Infogempa extends Model
{
	public $fillable = ['no','tanggal','waktu','lintang','bujur','kedalaman','mag','mlv','x','y','z','keterangan'];
}