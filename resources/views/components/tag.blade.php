@props(['size'=>'base'])

@php
    
    $classes ="bg-white/10 rounded-xl hover:bg-white/20 transition duration-300 ";


if($size == 'base')
{
    $classes .=  'px-2 py-1 text-2xs ';
}

if($size == 'big')
{
    
    $classes .= 'px-5 py-1 text-sm ';
}
@endphp


<a href="#" class="{{$classes}}">{{$slot}}</a>
