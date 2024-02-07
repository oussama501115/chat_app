<x-app-layout>
   

    <div class="chat_container">

        <div class="chat_list_container">
           <livewire:chat-list/> 
        </div>

        <div class="chat_box_container">
             
            <livewire:chatbox />
            
            <livewire:send-message /> 
        </div>
    </div>

    
</x-app-layout>