<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div>
                        @foreach ($messages as $message)
                        <div class="chat @if ($message->fromUser->id === auth()->id())
                            chat-end
                        @else
                            chat-start
                        @endif">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img
                                        alt="Tailwind CSS chat bubble component"
                                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                        
                            <div class="chat-header">
                                {{$message->fromUser->name ?? 'Unknown'}}
                                <time class="text-xs opacity-50">{{ $message->created_at->diffForHumans() }}</time>
                            </div>
                        
                            <div class="chat-bubble">{{ $message->message }}</div>
                            <div class="chat-footer opacity-50">Delivered</div>
                            
                        </div>
                        @endforeach
                    </div>
                    
                    <div class="from-control">
                        <form action="" wire:submit.prevent="sendMessage">
                            @csrf
                            <textarea wire:model="message" class="textarea texareaboreded border-sky-500 bg-white text-black w-full" placeholder="send your message..."></textarea>
                            <button class="btn btn-primary text-white" type="submit">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- <div class="chat chat-end">
    <div class="chat-image avatar">
        <div class="w-10 rounded-full">
            <img
                alt="Tailwind CSS chat bubble component"
                src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
        </div>
    </div>
    <div class="chat-header">
        Anakin
    <time class="text-xs opacity-50">12:46</time>
    </div>
    
    <div class="chat-bubble">I hate you!</div>
    <div class="chat-footer opacity-50">Seen at 12:46</div>
</div> --}}