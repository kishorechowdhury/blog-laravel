@props(['tagsCsv'])

@php
$tags = explode(',', $tagsCsv);
$total = count($tags);
@endphp

<p>Tags: 
    @foreach($tags as $tag)
        @php
        $tag = trim($tag)
        @endphp
         @if ($loop->last)
         <a href="/posts?tag={{$tag}}">{{$tag}}</a>
         @else
         <a href="/posts?tag={{$tag}}">{{$tag}}</a>, 
         @endif
    @endforeach
</p>