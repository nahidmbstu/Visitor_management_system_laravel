<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable=['guest_name',
						 'guest_idcard',
						 'guest_passport',
						 'guest_drivelic',
						 'guest_company',
						 'guest_phone',
						 'guest_type',
						 'photo',
						 'note'];
}
