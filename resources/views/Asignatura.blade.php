

<form class="row g-3 needs-validation" novalidate action = "/Asignatura" method="POST">
    @csrf
    @if(session('success'))
        <h6 class ="alert alert success">{{session('success')}}</h6>
    @endif

    @error('nombre',)
        <h6 class ="alert alert danger">{{session('$message')}}</h6>
    @enderror
    <div class="col-md-4">
        <label for="codigo" class="form-label"> Nombre</label>
        <input type="text" class="form-control" id="codigo" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>
    <div class="col-md-4">
        <label for="nombre" class="form-label">Código</label>
        <input type="text" class="form-control" id="nombre" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>

<div>
    @foreach($asignaturas as $asignatura)
        <div class="row py-1">
            <div class="col-md-9  align-items-center">
                <a href="{{route('asignatura-edit', ['id'=> $asignatura->id]) }}">{{$asignatura->nombre}}</a>
            </div>
            <div class="col-md-3 justify-content-end">
                <form action="{{ route('asignatura-destroy', [$asignatura->id]) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                </form>
            </div>
        </div>

    @endforeach
</div>
