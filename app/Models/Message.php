<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Convrsation;

class Message extends Model
{
    use HasFactory;


    protected $fillable=[
        'sender_id',
        'receiver_id',
        'conversation_id',
        'body',
    ];


    // public function conversation()
    // {
    //     return $this->belongsTo(Convrsation::class);
    //     # code...
    // }

    // public function user( )
    // {
    //     return $this->belongsTo(User::class ,'sender_id');
    //     # code...
    // }
}
