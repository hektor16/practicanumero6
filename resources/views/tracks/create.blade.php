<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2>
                Registrar nueva Cancion
            </h2>
        </div>
    </x-slot>
    <div>
        <form action="{{ route('tracks.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title">
            @error('name')
                <div>{{ $message }}</div>
            @enderror
            <input type="file" name="music">
            @error('music')
                <div>{{ $message }}</div>
            @enderror
            <button type="submit">
                Registrar
            </button>
    </div>
</x-app-layout>