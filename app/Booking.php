<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'tbl_dondat';
    protected $fillable = ['nguoidung_id', 'diemdon', 'diemden', 'yeucau', 'ngaydi', 'ngayve'];
}
