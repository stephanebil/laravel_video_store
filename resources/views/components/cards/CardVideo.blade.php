@props([
    'url_img',
    'title',
    'description',
])


<div class="">
    <img src="{{ asset('storage/'. $url_img)}}" alt="{{ $title }}" class="">
    <div class="">
        <p class="py-5">{{ $title }}</p>
        <p class="">{{ $description }}</p>
    </div>
</div>
