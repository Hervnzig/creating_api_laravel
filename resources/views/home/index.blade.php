@extends('layouts.master')

@section('title')
    Homepage
@endsection

@section('styles')
    <style>
    h1{
        color: blue;
        background-color: red !important;
    }
    </style>
@endsection

@section('content')

    <h1>Welcome</h1>
    <p>this is my homepage</p>
@endsection

@section('script')

<script>
alert("Hello")
</script>

@endsection