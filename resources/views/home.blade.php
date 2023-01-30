@extends('layouts.master')

@section('content')
<div>
    <ul>
        <li>
            <a href="{{route('profiles.basic')}}">profile setting</a>
        </li>
        <li>
            <a href="{{route('profiles.basic')}}">other setting</a>
        </li>
    </ul>
</div>
@endsection
