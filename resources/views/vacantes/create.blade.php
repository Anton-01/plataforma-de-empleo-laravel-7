@extends('layouts.master')

@section('main')
<div class="block block-rounded">
    <div class="block-header">
        <h2>Crear vacante</h2>
    </div>
    <div class="block-content block-content-full">
        <form action="{{ route('vacantes.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="example-text-input">Puesto ofrecido</label>
                        <input class="form-control" id="titulo" type="text" name="titulo" value="{{ old('titulo') }}"
                            placeholder="Titulo">
                        @error('titulo')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="categoria">Categoría</label>
                        <select class="form-control" id="categoria" name="categoria">
                            <option value="0" disabled select> Selecciona una categoria</option>
                            @forelse ($categorias as $item)
                            <option value="{{ $item->id }}" {{ old('categoria') == $item->id ? 'selected' : '' }}>
                                {{ $item->nombre }} </option>
                            @empty
                            <option value="0"> No hay categorias disponibles</option>
                            @endforelse
                        </select>
                        @error('categoria')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="plazas">No.plazas</label>
                        <select class="form-control" id="plazas" name="plazas">
                            <option value="0" disabled select> Selecciona una categoria</option>
                            <option value="1"> 1</option>
                            <option value="2"> 2</option>
                            <option value="3"> 3</option>
                            <option value="4"> 4</option>
                            <option value="5"> 5</option>
                            <option value="6"> 6</option>
                            <option value="7"> 7</option>
                            <option value="8"> 8</option>
                            <option value="9"> 9</option>
                            <option value="10"> 10</option>

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
                        <input class="form-control" id="rfc" type="text" name="rfc" value="{{ old('rfc') }}" placeholder="rfc">
                        @error('rfc')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="experiencia">Experiencia en el puesto</label>
                        <select class="form-control" id="experiencia" name="experiencia">
                            <option value="0" disabled selected> Selecciona la experiencia</option>
                            @forelse ($experiencia as $item)
                            <option value="{{ $item->id }}" {{ old('experiencia') == $item->id ? 'selected' : '' }}>
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
                        <label for="salario">Salario (Mensual)</label>
                        <select class="form-control" id="salario" name="salario">
                            <option value="0" disabled selected> Selecciona el salario</option>
                            @forelse ($salario as $item)
                            <option value="{{ $item->id }}" {{ old('salario') == $item->id ? 'selected' : '' }}>
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
                        <label for="escolaridad">Escolaridad mínima</label>
                        <input class="form-control" id="escolaridad" type="text" name="escolaridad" value="{{ old('escolaridad') }}"
                            placeholder="escolaridad">
                        @error('escolaridad')
                        <div class="alert bg-danger alert-dismissable text-white rounded mt-2" role="alert">
                            <p class="mb-0">{{ $message }}</p>
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="horario">Horario y días de trabajo</label>
                        <input class="form-control" id="horario" type="text" name="horario" value="{{ old('horario') }}"
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
                        <label for="rango">Rango de edad</label>
                        <select class="form-control" id="rango" name="rango">
                            <option value="0" disabled selected> Selecciona el rango</option>
                            <option value="18-20"> 18-20</option>
                            <option value="20-25"> 20-25</option>
                            <option value="25-30"> 25-30</option>
                            <option value="30-35"> 30-35</option>
                            <option value="35-40"> 35-40</option>
                            <option value="40-45"> 40-45</option>
                            <option value="45-50"> 45-50</option>
                            <option value="50-55"> 50-55</option>
                            <option value="55-60"> 55-60</option>
                            <option value="60-65"> 60-65</option>
                            <option value="65-70"> 65-70</option>
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
                        <label for="sexo">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo">
                            <option value="0" disabled selected> Selecciona el sexo</option>
                            <option value="Mujer"> Mujer</option>
                            <option value="Hombre"> Hombre</option>
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
                        <label for="licencia">Licencia de manejo</label>
                        <select class="form-control" id="licencia" name="licencia">
                            <option value="0" disabled selected> Selecciona una opción</option>
                            <option value="si"> Si</option>
                            <option value="no"> No</option>
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
                        <label for="cartilla">Cartilla militar</label>
                        <select class="form-control" id="cartilla" name="cartilla">
                            <option value="0" disabled selected> Selecciona una opción</option>
                            <option value="si"> Si</option>
                            <option value="no"> No</option>
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
                <label for="description">Descripción del puesto</label>
                <textarea class="form-control" id="descripcion" name="description">
                    {{ old('description') }}
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
                        <label for="actividades">Actividades a realizar</label>
                        <textarea class="form-control form-control-alt" id="actividades" name="actividades">
                                                            {{ old('actividades') }}
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
                        <label for="habilidades">Habilidades indispensables</label>
                        <textarea class="form-control form-control-alt" id="habilidades" name="habilidades">
                                                            {{ old('habilidades') }}
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
                <button type="submit" class="btn btn-primary">Publicar</button>
            </div>

        </form>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/js/vacante-summernote.js')}}" defer></script>
@endsection
