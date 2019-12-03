@extends('layouts.master')

@section('title')
    Homepage
@endsection

@section('styles')
    <style>
    h1{
        color: #fff;
        background-color: green;
    }
    </style>
@endsection

@section('content')
<div>
    <h1>Welcome</h1>
    <p>this is my homepage</p>

    @foreach ($data as $item)
            <ol><li>{{ $item }}</li></ol>
    @endforeach 
</div>

@endsection

@section('script')

<script>
// alert("Hello")
</script>

@endsection