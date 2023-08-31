@php
    $fruits=['apple','bananna','grapes','orange']
  
@endphp
<h1>header page</h1>
{{-- @include('pages.footer',['names'=>$fruits]) --}}
{{-- @foreach ($names as $key=>$value )
<p>
   {{$key}}= {{$value}}
</p>
@endforeach --}}
@forelse ( $names as $key=>$value )
<p>
    {{$key}}= {{$value}}
 </p>
@empty
    <p>NO VALUE FOUND</p>
@endforelse
@php
    $question="what is your name"
@endphp
{!!"<h1>hello world</h1>"!!}
{{-- {!!"<script>prompt("")</script>"!!} --}}
@foreach ($fruits as $fruit )
@if ($loop->even)
<p>{{$fruit}}</p>  
@endif
    
@endforeach
    
