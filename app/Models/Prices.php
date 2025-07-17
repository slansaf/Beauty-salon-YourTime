<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    /** @use HasFactory<\Database\Factories\PricesFactory> */
    use HasFactory;

    protected $fillable =[
        "service_name",
        "time",
        "price",
        "services_id"
    ];

     public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
