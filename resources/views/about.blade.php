@extends('layouts.master')
@section('main')
<h1>ABOUT PAGE</h1>
{{-- <h1>{{$users}}{{$city}}</h1> --}}
@foreach ($users as $id=>$u )
<h3>{{$id}}:{{$u['name']}}|{{$u['phone']}}|{{$u['school']}}</h3>
<a href="{{route('user',$id)}}">Show</a>
    
@endforeach
@verbatim
{{message}}

@endverbatim
@endsection
@section('parent')
@parent
<h1>child content</h1>
@endsection
@php
    $fruits=['apple','banana'];
@endphp
<script>
    var data=@json($fruits);
//   for (let index = 0; index < data.length; index++) {
//     const element = data[index];
//     console.log(element)
    
//   }
data.forEach(function(entry) {
    console.log(entry);
    
    
});

</script>
@push('scripts')
<script >
    var message="ali"
</script>
    
@endpush