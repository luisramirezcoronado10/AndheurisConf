<div>
    <h1>Búsqueda de artículo</h1>
    <input type="text" wire:model="search" placeholder="search">
    <!-- <button type="button" wire:click="buscar">Buscar artículo</button> -->
    @if ($articulos->count() != 0)
        @foreach ($articulos as $articulo)
            {{ $articulo->title }} - {{$articulo->description}}
        @endforeach
    @else
        <p>No se econtraron resultados</p>
    @endif
    
</div>
