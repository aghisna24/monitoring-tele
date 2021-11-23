<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

Class Tele1 extends Model
{
  use softDeletes;

  protected $table = "nodes_tele_1";
  protected $fillable = [
    // Kualitas
    'MQ7',
    'MQ131',
    'MQ136',
    'NH3',
    'NO3',
    'DUST',
    // Cuaca
    'DHT22_TEMP',
    'DHT22_HUMID',
    'BME280',
    'RAIN',
    // Angin
    'ANEMO',
    'WIND_DIRECT'
  ];
}