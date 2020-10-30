
    @forelse ($vacantes as $vacante)
    <div class="single-job-items mb-30 border-sefeco">
        <div class="job-items">
            <div class="job-tittle">
                <a href="{{ route('vacantes.show', $vacante) }}">
                    <h4>{{ $vacante->titulo }}</h4>
                </a>
                <ul>
                    <li>Empresa: {{ $vacante->reclutador->name }}</li>
                    <li>Salario: {{ $vacante->salario->salario }}</li>
                </ul>
            </div>
        </div>
        <div class="items-link f-right">
            <a href="{{ route('vacantes.show', $vacante) }}">Ver vacante</a>
            <span>{{ $vacante->created_at->diffForHumans() }}</span>
        </div>
    </div>
    @empty
    <li class="p-10 border border-gray-300 bg-white shadow">
        <h2 class="text-2xl font-bold text-gray-700">No hay Vacantes disponibles para mostrar</h2>
    </li>
    @endforelse

