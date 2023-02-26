@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('teachers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Name Teachers <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="name_teachers" value="{{ old('name_teachers') }}" />
            </div>
            <div class="form-group">
                <label>City <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="city" value="{{ old('city') }}" />
            </div>
            <div class="form-group">
                <label>Pob <span class="text-danger">*</span></label>
                <input class="form-control" type="text" name="pob" value="{{ old('pob') }}" />
            </div>
            <div class="form-group">
                <label>Dob <span class="text-danger">*</span></label>
                <input class="form-control" type="date" name="dob" value="{{ old('dob') }}" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Simpan</button>
                <a class="btn btn-danger" href="{{ route('teachers.index') }}">Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection