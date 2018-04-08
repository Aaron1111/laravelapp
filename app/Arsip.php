<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arsip extends Model
{
     protected $table = 'arsip';  //

  protected $fillable = [
  	'no_dokumen',
  	'negara',
  	'tahun',
  	'judul',
  	'tipe',
  ];//
}
