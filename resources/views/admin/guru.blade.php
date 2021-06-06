@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Data Nilai Raport Siswa</h3>

        <div class="card-tools">
         
        </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover table-striped">
                <thead class="text-center">
                <tr>
                     <th><small>Nama</small></th>
                    <th><small>Nilai Agama</small></th>
                    <th><small>Nilai Matematika</small></th>
                    <th><small>Nilai Indonesia</small></th>
                    <th><small>Nilai Inggris</small></th>
                    <th><small>Nilai IPA</small></th>
                    <th><small>Nilai IPS</small></th>
                    <th><small>Nilai PKN</small></th>
                    <th><small>Nilai Akhir</small></th>
                    <th><small>Predikat</small></th>
                    <th><small>Aksi</small></th>
                </tr>
                <tbody class="text-center">
                    @foreach ($nilai as $data)
                        <tr>
                            <td><small>{{ $data->name }}</small></td>
                            <td><small>{{ $data->nilaiagama }}</small></td>
                            <td><small>{{ $data->nilaimtk }}</small></td>
                            <td><small>{{ $data->nilaiindo }}</small></td>
                            <td><small>{{ $data->nilaieng }}</small></td>
                            <td><small>{{ $data->nilaiipa }}</small></td>
                            <td><small>{{ $data->nilaiips }}</small></td>
                            <td><small>{{ $data->nilaipkn }}</small></td>
                            <td><small>{{ $data->nilaiakhir }}</small></td>
                            <td><small>{{ $data->grade }}</small></td>
                            <td>
                                <a href="/nilai/hapus/{{ $data->id }}" class="btn btn-sm btn-danger"><small>Hapus</small></a> 
                                <a href="/nilai/edit/{{ $data->id }}" class="btn btn-sm btn-primary"><small>Edit</small></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <a href="/nilai/create" class="btn-sm btn btn-info">
                <i class="fa fa-plus-circle" aria-hidden="true"></i>
                Tambah Nilai
            </a>
        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection