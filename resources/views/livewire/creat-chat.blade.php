
    
   <div class = "users">

     <ul class="list-group">
     @foreach ($users as $user)
       <li class="list-group-item  list-group-item-action" wire:click="addTodo({{$user->id}})" >{{$user->name}}</li>
      @endforeach
     </ul>
     
   </div>
   


