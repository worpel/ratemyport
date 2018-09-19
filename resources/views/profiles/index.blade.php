@extends('layouts.app')

@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title">
            RateMyPort
        </div>
            
        <div class="d-flex flex-wrap justify-content-start">
            @foreach ($users as $user)
                <profile-card 
                    userid="{{ $user->id }}"
                    name="{{ $user->name }}"
                    image="{{ $user->profile['image'] }}"
                    description="{{ $user->profile['description'] }}"
                    php="{{ $user->profile['php'] }}"
                    sql="{{ $user->profile['sql'] }}"
                    css="{{ $user->profile['css'] }}"
                    javascript="{{ $user->profile['javascript'] }}"
                    html="{{ $user->profile['html'] }}"
                    portfolio="{{ $user->profile['portfolio'] }}"
                    github="{{ $user->profile['github'] }}"
                    twitter="{{ $user->profile['twitter'] }}"
                    class="my-3 mx-auto mr-auto">
                </profile-card>
            @endforeach
        </div>
        <p class="subtitle text-center mt-2">A platform for rating web artisan portfolios</p>
    </div>
</div>
@endsection