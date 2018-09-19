@extends('layouts.app')

@section('content')
<user-profile-detail 
    name="{{ $myuser->name }}"
    description="{{ $myuser->profile->description }}"
    php="{{ $myuser->profile->php }}"
    sql="{{ $myuser->profile->sql }}"
    css="{{ $myuser->profile->css }}"
    javascript="{{ $myuser->profile->javascript }}"
    html="{{ $myuser->profile->html }}"
    portfolio="{{ $myuser->profile->portfolio }}"
    github="{{ $myuser->profile->github }}"
    twitter="{{ $myuser->profile->twitter }}">
</user-profile-detail>
@endsection