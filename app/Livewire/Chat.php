<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class Chat extends Component
{
    public User $user;

    public $massage = '';

    public function render()
    {
        return view('livewire.chat');
    }

    public function sendMassage() {
        Message::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $this->user->id,
            'massage' => $this->massage,
        ]);

        
    }
}
