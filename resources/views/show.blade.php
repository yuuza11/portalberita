<x-layout>
    <x-slot:title>{{ $news->title }}</x-slot>

    <div class="bg-gray-900 min-h-screen p-6 text-white mx-auto">
        <img src="{{ asset('storage/' . $news->image) }}" alt="image" class="w-3xl h-100 object-cover rounded-xl mb-6 mx-auto">
        <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>
        <p class="text-sm text-gray-400 mb-6">Dipublikasikan: {{ $news->created_at->format('d M Y') }}</p>
        <div class="text-gray-200 leading-relaxed space-y-4">
            @foreach(explode("\n", $news->description) as $paragraph)
                @if (trim($paragraph) !== '')
                    <p>{{ $paragraph }}</p>
                @endif
            @endforeach
        </div>
    </div>
</x-layout>
