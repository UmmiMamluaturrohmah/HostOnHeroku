@extends('siswa.layout')

@section('content')
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{Auth::user()->name}}</h3>

          <div class="card-tools">
            
          </div>
        </div>
        <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead class="text-center">
              <tr>
                <th>Nilai Agama</th>
                <th>Nilai Matematika</th>
                <th>Nilai Indonesia</th>
                <th>Nilai Inggris</th>
                <th>Nilai IPA</th>
                <th>Nilai IPS</th>
                <th>Nilai PKN</th>
                <th>Nilai Akhir</th>
                <th>Predikat</th>
              </tr>

            <tbody class="text-center">
            @foreach ($nilai as $data)
              <tr>
                <td>{{ $data->nilaiagama }}</td>
                <td>{{ $data->nilaimtk }}</td>
                <td>{{ $data->nilaiindo }}</td>
                <td>{{ $data->nilaieng }}</td>
                <td>{{ $data->nilaiipa }}</td>
                <td>{{ $data->nilaiips }}</td>
                <td>{{ $data->nilaipkn }}</td>
                <td>{{ $data->nilaiakhir }}</td>
                <td>{{ $data->grade }}</td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <p>Keterangan : Selamat, Anda Naik Kelas! </p>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
@endsection