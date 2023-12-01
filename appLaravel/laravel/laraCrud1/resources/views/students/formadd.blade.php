@section('content')
@extends('layout.main')

@section('content')
<h1>Form New Data Students</h1>
<div class="card">
    <div class="card-header">
      <button type="button" class="btn btn-warning" onclick="window.location='{{ 'students' }}'">
        <i class="fa-solid fa-circle-plus"></i> Kembali
        </button>
    </div>

    <div class="card-body">
       
        <form action="{{ url('students') }}" method="post">
            @csrf
            <div class="row mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">ID Students</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm @error('txtid') is-invalid @enderror"  id="txtid" name="txtid" value="{{ old('txtid') }}">
                    @error('txtid')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtfullname" class="col-sm-2 col-form-label">Fullname</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control form-control-sm  @error('txtfullname') is-invalid @enderror" id="txtfullname" name="txtfullname" value="{{ old('txtfullname') }}">
                    @error('txtid')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtgender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-4">
                    <select class="form-select form-select-sm" name="txtgender" id="txtgender">
                        <option value="" selected>-Pilih-</option>
                        <option value="M" {{ (old('txtgender')=='M') ? 'selected' : '' }} >Male</option>
                        <option value="F" {{ (old('txtgender')=='F') ? 'selected' : '' }} >Female</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtaddress" class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                    <textarea class="form-control  @error('txtaddress') is-invalid @enderror" name="txtaddress" id="txtaddress" cols="30" rows="10" value="{{ old('txtaddress') }}"></textarea>
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="txtphone" class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-6">
                    <input type="text" name="txtphone" id="txtphone" class="form-control form-control-sm @error('txtphone') is-invalid @enderror" value="{{ old('txtphone') }}">
                </div>
            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-6">
                    <button class="btn btn-sm btn-success" type="submit">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection