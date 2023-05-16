@extends('layout')
@push('css')
    <link rel="stylesheet" href="{{asset('css/rules.css')}}">
@endpush
@section('content')
    <div class="container rules">
        @yield('rulesContent')
    </div>
@endsection