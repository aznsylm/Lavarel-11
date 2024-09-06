<x-layout>
  {{-- slot dari component header --}}
  <x-slot:title>{{ $title }}</x-slot:title>
  
  <h1 class="text-3xl font-bold mb-8">Ini Halaman Books !!</h1>

  <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
    @foreach ($books as $book)
      <div class="bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-xl font-semibold mb-2">{{ $book['title'] }}</h2>
        <p class="text-gray-700 mb-1">Author: {{ $book['author'] }}</p>
        <p class="text-gray-500 text-sm">Published at: {{ \Carbon\Carbon::parse($book['published_at'])->diffForHumans() }}</p>
      </div>
    @endforeach
  </div>
</x-layout>