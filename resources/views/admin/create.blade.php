@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <form action="/nilai/store" method="post">
                    @csrf
                    <div class="card-header">
                        Tambah Nilai
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="user">Name User</label>
                            <select name="user" id="user" class="form-control">
                                <option disabled selected>-- Choose Option --</option>
                                @foreach ($user as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai Agama</small></label>
                            <input type="text" name="nilaiagama" id="nilaiagama" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai Matematika</small></label>
                            <input type="text" name="nilaimtk" id="nilaimtk" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai Indonesia</small></label>
                            <input type="text" name="nilaiindo" id="nilaiindo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai Inggris</small></label>
                            <input type="text" name="nilaieng" id="nilaieng" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai IPA</small></label>
                            <input type="text" name="nilaiipa" id="nilaiipa" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai IPS</small></label> 
                            <input type="text" name="nilaiips" id="nilaiips" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai PKN</small></label>
                            <input type="text" name="nilaipkn" id="nilaipkn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mapel"><small>Nilai Akhir</small></label>
                            <input type="text" name="score" id="score" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection