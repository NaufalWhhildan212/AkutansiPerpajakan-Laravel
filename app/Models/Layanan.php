<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $table = 'layanan';
    protected $primaryKey = 'id';
    protected $fillable=[
        'id', 'Id_faktur', 'Id_customer', 'NPWP','No_fakturPajak','DPP','PPN'];
}
