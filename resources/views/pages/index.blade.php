<x-layouts.main-layout title="Accueil">
    <h1 class="text-blue-500 text-center text-4xl font-black">Video Store</h1>
    <div class="grid grid-cols-4 gap-3" >
            @forelse ($videos as $video )
                <a href="videos/{{ $video->id }}" class="">
                    <x-cards.CardVideo :description="$video->description" :title="$video->title" :url_img="$video->url_img"/>
                </a>
            @empty
                <p class="text-center ">Pas de film actuellment</p>
            @endforelse 
        </div>
        {{-- pagination --}}
        <div class="my-12">
            {{ $videos->links('pagination::tailwind') }}
            {{-- {{ $posts->links('pagination::simple-tailwind') }} --}}
        </div>
</x-layouts.main-layout>    
