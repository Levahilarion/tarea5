@extends('tema.app')

@section('title', "Editar tarea")

@section('contenido')

<h3> 
    Editar tarea <i>{{ $tarea->nombre }}</i>
</h3>
<form action="{{ route('tarea.store') }}" method="POST">
@csrf
    <div class="row">
        <div class="col-sm-12 text-primary">
            <label for="InputName" class="form-label">Name</label>
            <input type="text" name="name" id="InputName" class="form-control" placeholder="..." value="{{ old('name') }}">
            </div>

            <div class="col-sm-10 text-primary">
                <label for="TexAreaDescription" class="form-label">Description</label>
                <textarea name="description" id="TexAreaDescription" cols="30" rows="10" class="form-control">{{ old('description')}}</textarea>
            </div>

    
            </div>
            <div class="col-sm-4 text-primary">
                <label for="SelectState" class="form-label">State</label>
                <select name="state" id="SelectState" class="form-select">
                 <option value="0">waiting</option>
                 <option value="1">finished</option>
                 <option value="2">postponed</option>
                 <option value="3">cancelled</option>
                 <option value="4">removed</option>
                </select>
                <script>
                    document.getElementById('SelectState').value="{{old('state')}}";
                </script>
            </div>
            <div class="col-sm-4 text-primary">
               <label for="InputRegister" class="form-label">Register_date</label>
               <input type="datetime-local" name="register_date" id="InputRegister" class="form-control" value="{{ old('register_date')}}">
            </div>

            <div class="col-sm-4 text-primary">
               <label for="InputFinished" class="form-label">Finished_date</label>
               <input type="datetime-local" name="finished_date" id="InputFinished" class="form-control" value="{{ old('finished_date')}}">
            </div>

            <div class="col-sm-4 text-primary">
               <label for="InputChange" class="form-label">Change_date</label>
               <input type="datetime-local" name="change_date" id="InputChange" class="form-control" value="{{ old('change_date')}}">
            </div>

            
            <div class="col-sm-12 text-end my-2">
                <button type="submit" class="btn btn-primary">
                    Guardar
                </button>
            </div>
        </div>
</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection