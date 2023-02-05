@extends('layouts.master')

@section('content')
<div>
    <ul>
        <li>
            <a href="{{route('profile.basic')}}">profile setting</a>
        </li>
        <li>
            <a href="{{route('profile.basic')}}">other setting</a>
        </li>
        <li>
            <a href="{{route('themes.favourite')}}">My Faourite Theme</a>
        </li>

        <li>
            <a href="{{route('portfolio.index', Auth::user()->username)}}">my portfolio</a>
        </li>
    </ul>
</div>
@endsection
