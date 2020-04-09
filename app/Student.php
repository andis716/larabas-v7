<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    // ? method di bawah ini di gunakan ketikan record data dari input di trima menggunakan Array
    protected $fillable = ['nama', 'nis', 'email', 'alamat'];
    // ? isi array di atas adalah array yg di perbolehkan untuk di tambahkan 
    // ? fillable kebalikan dari guarded
}
