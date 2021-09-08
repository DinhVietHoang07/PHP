<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Covid extends Model
{
    use HasFactory;
    protected $table='users';
    protected $fillable=[
        'id_card','name','date_year','address','phone','allergy_history'
    ];
}
