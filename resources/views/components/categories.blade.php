@props(['categoryValues'])

@php
    $categories = explode(',', $categoryValues);
@endphp

<ul>
    @foreach($categories as $category)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-3 px-3 mr-2 text-xs my-2">
        <a href="/?category={{$category}}">{{$category}}</a>
    </li>
    @endforeach
</ul>