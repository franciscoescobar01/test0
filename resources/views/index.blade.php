@extends('app')

@section('content')

    <div class="container w-25 border p-4 mt-4">
        <form class="row g-3" action = "{{route('asignaturas')}}" method="POST">
            @csrf
            @if(session('success'))
                <h6 class ="alert alert-success">{{session('success')}}</h6>
            @endif

            @error('nombre')
                <h6 class ="alert alert-danger">{{$message}}</h6>
            @enderror

            <div class="col-md-8">

                <label for="nombre" class="form-label"> Nombre </label>
                <input type="text" class="form-control" id="nombre" name="nombre">
            </div>

            <div class="col-md-8">
                <label for="codigo" class="form-label"> Codigo</label>
                <input type="text" class="form-control" id="codigo" name="codigo">
            </div>


            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>


@endsection
