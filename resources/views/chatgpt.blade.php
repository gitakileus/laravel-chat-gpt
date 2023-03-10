@extends('wrapper')

@section('chat-gpt')
<div id="app">
    <div id="chat_container">
    </div>

    <div class="preload">
        <div class="gpt-content">
            <h1 class="title">GPT - Imperium Group</h1>
            <div class="explain">Create Content That is Enriched By AI, With The Touch of A Human</div>
            <div class="examples">
            <h4 class="title">Examples:</h4>
                <div class="item">What it Means to Be A Top Tech Startup in 2023?<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
                <div class="item">How A small tech company out of the midwest is capturing market share?<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
                <div class="item">How to Be A Top Realtor Post COVID?<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
                <div class="item">How to Attract Investor Attention?<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
                <div class="item">How to Hire The Right Talent?<img src="{{ asset('assets/send.svg') }}" alt="send" /></div>
            </div>
        </div>
    </div>

    <form id="chat_form">
        @csrf
        <textarea name="prompt" placeholder="Ask me something..."></textarea>
        <button type="submit"><img src="{{ asset('assets/send.svg') }}" alt="Ask to GPT AI" /></button>
    </form>
</div>
@endsection
