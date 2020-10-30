<div class="row">
    <div class="col-xl-8">
        <input type="text"
        placeholder="Busca un trabajo ..."
        class="buscador-sefeco-search"
        wire:model="query"
        wire:keydown.escape="resetSearch"
        wire:keydown.tab="resetSearch"
        wire:keydown.ArrowUp="decrementHighlight"
        wire:keydown.ArrowDown="incrementHighlight"
        wire:keydown.enter="selectContact"
        >

        @if(!empty($query))
            <div class="" wire:click="resetSearch"></div>

            <div class="continer-result">
                @if(!empty($vacantes))
                    @foreach($vacantes as $i => $vacante)
                    <a href="{{ route('vacantes.show', $vacante['slug']) }}" target="_blank"
                        class="result-item {{ $highlightIndex === $i ? 'highlightIndex' : '' }}">
                        <i class="fas fa-toolbox"></i> {{ $vacante['titulo'] }}
                    </a>
                    @endforeach
                @else
                    <div class="">Sin resultados para tu búsqueda!</div>
                @endif
            </div>
        @endif
    </div>
</div>

