@extends('layouts.master')

@section('main')
<div class="block block-rounded">
    <div class="block-header">
        <h2>Editar vacante</h2>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('vacantes.update', $vacante) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="example-text-input">Puesto ofrecido <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <input class="form-control" id="titulo" type="text" name="titulo" value="{{ old('titulo', $vacante->titulo) }}"
                            placeholder="Titulo">
                        @error('titulo')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="plazas">No.plazas <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <select class="form-control" id="plazas" name="plazas">
                            <option value="0" disabled > Selecciona una categoria</option>
                            <option value="1" {{ $vacante->plazas === '1' ? 'selected' : '' }}> 1</option>
                            <option value="2" {{ $vacante->plazas === '2' ? 'selected' : '' }}> 2</option>
                            <option value="3" {{ $vacante->plazas === '3' ? 'selected' : '' }}> 3</option>
                            <option value="4" {{ $vacante->plazas === '4' ? 'selected' : '' }}> 4</option>
                            <option value="5" {{ $vacante->plazas === '5' ? 'selected' : '' }}> 5</option>
                            <option value="6" {{ $vacante->plazas === '6' ? 'selected' : '' }}> 6</option>
                            <option value="7" {{ $vacante->plazas === '7' ? 'selected' : '' }}> 7</option>
                            <option value="8" {{ $vacante->plazas === '8' ? 'selected' : '' }}> 8</option>
                            <option value="9" {{ $vacante->plazas === '9' ? 'selected' : '' }}> 9</option>
                            <option value="10" {{ $vacante->plazas === '10' ? 'selected' : '' }}> 10</option>
                        </select>
                        @error('plazas')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="rfc">RFC</label>
                        <input class="form-control" id="rfc" type="text" name="rfc" value="{{ old('rfc',$vacante->rfc) }}"
                            placeholder="rfc">
                        @error('rfc')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="experiencia">Experiencia en el puesto <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <select class="form-control" id="experiencia" name="experiencia">
                            <option value="0" disabled > Selecciona la experiencia</option>
                            @forelse ($experiencia as $item)
                            <option value="{{ $item->id }}" {{ old('experiencia', $vacante->experiencia_id) == $item->id ? 'selected' : '' }}>
                                {{ $item->experiencia }} </option>
                            @empty
                            <option value="0"> No hay experiencia disponible</option>
                            @endforelse
                        </select>
                        @error('experiencia')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="salario">Salario (Mensual) <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <select class="form-control" id="salario" name="salario">
                            <option value="0" disabled> Selecciona el salario</option>
                            @forelse ($salario as $item)
                            <option value="{{ $item->id }}" {{ old('salario', $vacante->salario_id) == $item->id ? 'selected' : '' }}>
                                {{ $item->salario }}
                            </option>
                            @empty
                            <option value="0"> No hay salarios disponibles</option>
                            @endforelse
                        </select>
                        @error('salario')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="escolaridad">Escolaridad mínima <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <input class="form-control" id="escolaridad" type="text" name="escolaridad"
                            value="{{ old('escolaridad', $vacante->escolaridad) }}" placeholder="escolaridad">
                        @error('escolaridad')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horario">Horario y días de trabajo <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <input class="form-control" id="horario" type="text" name="horario" value="{{ old('horario', $vacante->horario) }}"
                            placeholder="horario">
                        @error('horario')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="rango">Rango de edad <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <select class="form-control" id="rango" name="rango">
                            <option value="0" disabled> Selecciona el rango</option>
                            <option value="18-20" {{ $vacante->rango === '18-20' ? 'selected' : '' }}> 18-20</option>
                            <option value="20-25" {{ $vacante->rango === '20-25' ? 'selected' : '' }}> 20-25</option>
                            <option value="25-30" {{ $vacante->rango === '25-30' ? 'selected' : '' }}> 25-30</option>
                            <option value="30-35" {{ $vacante->rango === '30-35' ? 'selected' : '' }}> 30-35</option>
                            <option value="35-40" {{ $vacante->rango === '35-40' ? 'selected' : '' }}> 35-40</option>
                            <option value="40-45" {{ $vacante->rango === '40-45' ? 'selected' : '' }}> 40-45</option>
                            <option value="45-50" {{ $vacante->rango === '45-50' ? 'selected' : '' }}> 45-50</option>
                            <option value="50-55" {{ $vacante->rango === '50-55' ? 'selected' : '' }}> 50-55</option>
                            <option value="55-60" {{ $vacante->rango === '55-60' ? 'selected' : '' }}> 55-60</option>
                            <option value="60-65" {{ $vacante->rango === '60-65' ? 'selected' : '' }}> 60-65</option>
                            <option value="65-70" {{ $vacante->rango === '65-70' ? 'selected' : '' }}> 65-70</option>
                        </select>
                        @error('rango')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sexo">Sexo <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option value="0" disabled selected> Selecciona el sexo</option>
                            <option value="Mujer" {{ $vacante->sexo === 'Mujer' ? 'selected' : '' }}> Mujer</option>
                            <option value="Hombre" {{ $vacante->sexo === 'Hombre' ? 'selected' : '' }}> Hombre</option>
                            <option value="Indistinto" {{ $vacante->sexo === 'Indistinto' ? 'selected' : '' }}> Indistinto</option>
                        </select>
                        @error('sexo')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="licencia">Licencia de manejo <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <select class="form-control" id="licencia" name="licencia">
                            <option value="0" disabled> Selecciona una opción</option>
                            <option value="si" {{ $vacante->licencia === 'si' ? 'selected' : '' }}> Si</option>
                            <option value="no" {{ $vacante->licencia === 'no' ? 'selected' : '' }}> No</option>
                        </select>
                        @error('licencia')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="cartilla">Cartilla militar <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <select class="form-control" id="cartilla" name="cartilla">
                            <option value="0" disabled> Selecciona una opción</option>
                            <option value="si" {{ $vacante->cartilla === 'si' ? 'selected' : '' }}> Si</option>
                            <option value="no" {{ $vacante->cartilla === 'no' ? 'selected' : '' }}> No</option>
                        </select>
                        @error('cartilla')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Descripción del puesto <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                <textarea class="form-control" id="descripcion" name="description">
                    {{ old('description',$vacante->descripcion) }}
                </textarea>
                @error('description')
                <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                    <p class="mb-0">{{ $message }}</p>
                </div>
                @enderror
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="actividades">Actividades a realizar <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <textarea class="form-control form-control-alt" id="actividades" name="actividades">
                            {{ old('actividades', $vacante->actividades) }}
                        </textarea>
                        @error('actividades')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="habilidades">Habilidades indispensables <span class="campo-obligatorio">(Campo obligatorio)</span></label>
                        <textarea class="form-control form-control-alt" id="habilidades" name="habilidades">
                            {{ old('habilidades', $vacante->habilidades) }}
                        </textarea>
                        @error('habilidades')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-color-sefeco"> <i class="fas fa-save"></i> Publicar</button>
            </div>

        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/vacante-summernote.js')}}" defer></script>
@endsection
