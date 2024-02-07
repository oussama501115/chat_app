<?php

namespace App\Models;

use App\Models\Message;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Convrsation extends Model
{
    use HasFactory;
   
    protected $fillable=[
      'sender_id',
      'receiver_id',
      'last_time_message',
  ];

    // public function messages()
    // {
    //  return $this->hasMany(Message::class);

    //     # code...
    // }

    // public function user()
    // {
    //   return $this->belongsTo(User::class);
    //     # code...
    // }
}
