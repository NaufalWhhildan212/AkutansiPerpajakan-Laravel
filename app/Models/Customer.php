<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_customer', 'Nama_customer', 'Alamat','no_telepon','Perusahaan'];
}
