@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"><h1>Pridėti naują sunkvežimį</h1></div>
                <div class="card-body">
                    <form action="{{route('trucks-store')}}" method="post">
                        <div class="form-group mb-3">
                            <label>Sunkvežimio modelis</label>
                            <input type="text" name="brand" class="form-control">
                            <small class="form-text text-muted">Įveskite naujo sunkvežimio modelį</small>
                        </div>
                        <div class="form-group mb-3">
                            <label>Valstybinis numeris</label>
                            <input type="text" name="plate" class="form-control">
                            <small class="form-text text-muted">Įveskite naujo sunkvežimio valstybinį numerį</small>
                        </div>
                        <div class="form-group mb-3">
                            <label>Mechanikas</label>
                             <select class="form-select" name="mechanic_id">
                                <option selected value="0">Pasirinkite mechaniką</option>
                                @foreach ($mechanics as $mechanic)
                                <option value="{{$mechanic->id}}" @if($mechanic->id === $mechanicId) selected @endif>{{$mechanic->name}} {{$mechanic->surname}}</option>
                                    {{-- @if(old('mechanic_id', $mechanicId ? $mechanicId : 0) == $mechanic->id) selected @endif --}}
                                    {{-- >{{$mechanic->name}} {{$mechanic->surname}}</option> --}}
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Priskirkite mechaniką sunkvežimio priežiūrai</small>
                        </div>
                        <button type="submit" class="btn btn-primary">Pridėti</button>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('title', 'Naujas sunkvežimis')