<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MailMagazine extends Model
{
    use HasFactory;

    protected $fillable = [
        'email'
    ];

    public static function subscribe($email){

        return Self::create(['email' => $email ]);
    
    }

}
