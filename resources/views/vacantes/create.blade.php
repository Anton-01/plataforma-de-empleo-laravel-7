@extends('layouts.app')
@section('styles')
<link rel="stylesheet" href="{{ asset('/css/plugins/medium-editor.min.css') }}">
<link rel="stylesheet" href="{{ asset('/css/themes/beagle.css') }}">
<link rel="stylesheet" href="{{ asset('/css/plugins/dropzone.min.css') }}">
@endsection
@section('navegacion')
@include('ui.admin_nav')
@endsection
@section('content')
<h1 class="text-2xl text-center mt-10">Nueva Vacante</h1>
<form class="max-w-lg mx-auto py-10" action="{{ route('vacantes.store') }}" method="POST">
    @csrf
    <div class="mb-6 flex flex-wrap">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">Titulo Vacante:</label>
        <input id="titulo" type="text" name="titulo" value="{{ old('titulo') }}"
            class="shadow appearance-none border rounded w-full py-2 px-3  leading-tight focus:outline-none focus:shadow-outline @error('titulo') border-red-500 @enderror">
        @error('titulo')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
    </div>

    <div class="mb-6 flex flex-wrap">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="categoria">Categoria:</label>
        <select id="categoria" name="categoria"
            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="0" disabled selected> Selecciona una categoria</option>
            @forelse ($categorias as $item)
            <option value="{{ $item->id }}" {{ old('categoria') == $item->id ? 'selected' : '' }}>
                {{ $item->nombre }} </option>
            @empty
            <option value="0"> No hay categorias disponibles</option>
            @endforelse
        </select>

        @error('categoria')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
    </div>

    <div class="mb-6 flex flex-wrap">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="experiencia">Experiencia:</label>
        <select id="experiencia" name="experiencia"
            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="0" disabled selected> Selecciona la experiencia</option>
            @forelse ($experiencia as $item)
            <option value="{{ $item->id }}" {{ old('experiencia') == $item->id ? 'selected' : '' }}>
                {{ $item->experiencia }} </option>
            @empty
            <option value="0"> No hay experiencia disponible</option>
            @endforelse
        </select>

        @error('experiencia')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
    </div>

    <div class="mb-6 flex flex-wrap">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="ubicacion">Experiencia:</label>
        <select id="ubicacion" name="ubicacion"
            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="0" disabled selected> Selecciona la ubicacion</option>
            @forelse ($ubicacion as $item)
            <option value="{{ $item->id }}" {{ old('ubicacion') == $item->id ? 'selected' : '' }}>
                {{ $item->ubicacion }} </option>
            @empty
            <option value="0"> No hay ubicaciones disponibles</option>
            @endforelse
        </select>

        @error('ubicacion')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
    </div>

    <div class="mb-6 flex flex-wrap">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="salario">Salario:</label>
        <select id="salario" name="salario"
            class="block appearance-none w-full bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
            <option value="0" disabled selected> Selecciona el salario</option>
            @forelse ($salario as $item)
            <option value="{{ $item->id }}" {{ old('salario') == $item->id ? 'selected' : '' }}> {{ $item->salario }}
            </option>
            @empty
            <option value="0"> No hay salarios disponibles</option>
            @endforelse
        </select>

        @error('salario')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="descripcion">Descripción del puesto:</label>
        <div class="editable p-3 bg-white form-input w-fullbg-white border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline"
            data-placeholder="Descripción de la vacante" style="height: 250px"></div>
        <input type="hidden" id="descripcion" name="descripcion" value="{{ old('descripcion') }}">
        @error('descripcion')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-2 border-2 border-dashed" for="descripcion">Imagen del
            puesto:</label>
        <div id="dropzone-devjob" class="dropzone rounded bg-white" style="height: 250px"></div>
        <input type="hidden" name="imagen" id="imagen_devjob" value="{{ old('imagen') }}">
        @error('imagen')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
        <p id="error-dropzone-jobs"></p>
    </div>

    <div class="mb-6">
        <label class="block text-gray-700 text-sm font-bold mb-5 border-2 border-dashed" for="descripcion">Habilidades y
            conocimientos: <span class="text-xs">(Elige al menos 3)</span> </label>
        @php
        $skills = ['HTML5', 'CSS3', 'CSSGrid', 'Flexbox', 'JavaScript', 'jQuery', 'Node', 'Angular', 'VueJS', 'ReactJS',
        'React
        Hooks', 'Redux', 'Apollo', 'GraphQL', 'TypeScript', 'PHP', 'Laravel', 'Symfony', 'Python', 'Django', 'ORM',
        'Sequelize',
        'Mongoose', 'SQL', 'MVC', 'SASS', 'WordPress', 'Express', 'Deno', 'React Native', 'Flutter', 'MobX', 'C#', 'Ruby
        on
        Rails']
        @endphp
        <list-skills :skills="{{ json_encode($skills) }}" :oldskills="{{ json_encode( old('skills') ) }}">
        </list-skills>
        @error('skills')
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-3 mb-1 text-sm w-full">
            <strong class="font-bold"> ¡Error!</strong>
            <span class="block">{{ $message }}</span>
        </div>
        @enderror
    </div>





    <button type="submit" class="bg-teal-500 w-full hover:bg-teal-600 p-3 focus:outline focus:shadow text-white">
        Publicar Vacante
    </button>

</form>
@endsection
@section('scripts')
<script src="{{ asset('/js/plugins/medium-editor.min.js') }}"></script>
<script src="{{ asset('/js/plugins/script_medium.js') }}"></script>
<script src="{{ asset('/js/plugins/dropzone.min.js') }}"></script>
<script src="{{ asset('/js/plugins/script_dropzone.js') }}"></script>
@endsection