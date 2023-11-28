<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Aduan extends Model
{
    use HasFactory;

    protected $fillable = [
        'userId',
        'judulAduan',
        'isiAduan',
        'lokasiKejadian',
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'userId');
    }
}
