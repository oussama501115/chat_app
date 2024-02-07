<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Convrsation;
use App\Models\Message;


class CreatChat extends Component
{

    public $users;
    public $message = 'hello';


   public function addTodo($receiverId){


    //dd($receiverId);
     $convertion = Convrsation::where('sender_id',auth()->user()->id)->where('receiver_id',$receiverId)->orWhere('receiver_id',auth()->user()->id)->where('sender_id',$receiverId)->get();

     if(count($convertion) == 0){
        
        //dd('chat not exsest');

        $creatconvrstion = Convrsation::create([
            'sender_id' => auth()->user()->id,
            'receiver_id'=> $receiverId,
            'last_time_message'=> '2024-02-07' 
        ]);

        

        $creatmessage = Message::create([
            'sender_id'=>auth()->user()->id,
            'receiver_id'=>$receiverId,
            'conversation_id'=> $creatconvrstion->id,
            'body'=>$this->message
        ]);

        $creatconvrstion->last_time_message = $creatmessage->created_at;
        $creatconvrstion->save();

        dd($creatmessage);

        
     }else{
        dd('converstion ol redy exsest');
     }

   }


    public function render()
    {
        $this->users = User::where('id', '!=', auth()->user()->id)->get();

        return view('livewire.creat-chat',['users'=>$this->users]);
    }
}
