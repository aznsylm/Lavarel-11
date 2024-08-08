
<x-layout>
  {{-- slot dari component header --}}
  <x-slot:title>{{ $title }}</x-slot:title>

  <h1>ini halaman About om !!</h1>
  <p>Nama: {{ $name }}</p>
</x-layout>