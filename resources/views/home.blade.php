@extends('layouts.default')

@section('content')
<div class="home-page full-height">
    @section('logo')
        @parent
    @endsection
    <h1>Secret Santa Generator</h1>
    <div class="links">
        <a href="/appstart">Launch App</a>
        <a href="/about">About</a>
    </div>
</div>
@endsection
