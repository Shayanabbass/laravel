@extends('layouts.master')
@push('css')
<link rel="stylesheet" href="style.css">
    
@endpush
@section('main')
<h1>POST PAGE</h1>
@if ($id)
<h2>helllo {{$id}}</h2>  
@else
<h1>no id found</h1>
@endif


    
@endsection