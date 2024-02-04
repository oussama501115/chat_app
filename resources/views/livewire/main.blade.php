<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Chat') }}
        </h2>
    </x-slot>

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