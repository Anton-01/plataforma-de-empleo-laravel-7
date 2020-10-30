@component('mail::message')
# Nombre: {{ $validatedData['nombre'] }}
# Teléfono: {{ $validatedData['telefono'] }}
# Asunto: {{ $validatedData['asunto'] }}
{{ $validatedData['mensaje'] }}
Gracias,<br>
{{ config('app.name') }}
@endcomponent
