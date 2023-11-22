@extends('principal.principal')

@section('body')

<nav>
    <ul>
        <li>
            <h1>Nueva Empresa</h1>
        </li>
        <li>
          {{-- <input type="search" id="search" name="search" placeholder="Search"> --}}
        </li>
    </ul>
    <ul>
        <li>

        </li>
    </ul>
</nav>
<div class="container">

    <form method="POST" action="{{route('empresas.store')}}">
        @csrf


        <!-- Grid -->
        <div class="grid">
      
          <!-- Markup example 1: input is inside label -->
          <label for="nombre">
            Nombre Empresa
            <input type="text" id="nombre" name="nombre" placeholder="Nombre Empresa" value="{{old('nombre')}}" required>
          </label>
      
          <label for="cuit">
            Cuit Empresa
            <input type="text" id="cuit" name="cuit" placeholder="Cuit" value="{{old('cuit')}}" required>
          </label>
      
        </div>
      
        <!-- Markup example 2: input is after label -->
        <label for="correo">Correo Electronico</label>
        <input type="email" id="correo" name="correo" placeholder="Correo Electronico" value="{{old('correo')}}" required>
        <small>Opcional.</small>
      
        <!-- Button -->
        <button type="submit">Guardar</button>
      
    </form>
    <a href="{{ url()->previous() }}" role="button">Volver</a>


</div>
    
@endsection