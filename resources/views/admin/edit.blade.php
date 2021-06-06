@extends('admin.layout')

@section('content')
<div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form action="/update/{{ $guru->id }}" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <select name="user" id="user" class="form-control">
                                @foreach ($user as $u)
                                    @if($u->id == $guru->user_id)
                                        <option value="{{ $u->id }}" selected>{{ $u->name }}</option>
                                    @else
                                        <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai Agama</label>
                            <input type="text" name="nilaiagama" id="mapel" class="form-control" value="{{$guru->nilaiagama}}" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai Matematika</label>
                            <input type="text" name="nilaimtk" id="mapel" class="form-control" value="{{$guru->nilaimtk}}" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai Indonesia</label>
                            <input type="text" name="nilaiindo" id="mapel" class="form-control" value="{{$guru->nilaiindo}}" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai Inggris</label>
                            <input type="text" name="nilaieng" id="mapel" class="form-control" value="{{$guru->nilaieng}}" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai IPA</label>
                            <input type="text" name="nilaiipa" id="mapel" class="form-control" value="{{$guru->nilaiipa}}" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai IPS</label> 
                            <input type="text" name="nilaiips" id="mapel" class="form-control" value="{{$guru->nilaiips}}" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai PKN</label>
                            <input type="text" name="nilaipkn" id="mapel" class="form-control" value="{{$guru->nilaipkn}}" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Nilai Akhir</label>
                            <input type="text" name="score" id="score" class="form-control" value="{{$guru->nilaiakhir}}" >
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" value="simpan">Edit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
