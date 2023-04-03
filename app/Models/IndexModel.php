<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class IndexModel extends Model
{
    use HasFactory,Notifiable;

    protected $fillable = [
        "teama",
        "teamb",
        "startdate",
        "enddate",
        "color"
    ];

    protected $table = 'list_tbl';
}
