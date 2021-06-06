@extends('admin.layout')

@section('content')
      <!-- Default box -->
      <div class="card">
      <div class="card-header">
          <h3 class="card-title" style="margin-left:40%;padding:8px;">Data Nilai Raport Kelas VIII</h3>
        </div>

        <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
            <thead class="text-center">
              <tr>
                <th>No</th>
                <th>NIS</th>
                <th>E-Mail</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
              </tr>

            <tbody class="text-center">
            @foreach ($datasiswa2 as $data)
              <tr>
                <td>{{ $loop->iteration }}</td>  
                <td>{{ $data->nis }}</td>
                <td>{{ $data->email }}</td>
                <td>{{ $data->name }}</td>
                <td>{{ $data->kelas }}</td>
                <td><a href="/guru/{{ $data->id }}" class="btn btn-info">Nilai</a></td>
              </tr>
              @endforeach
            </tbody>
            </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
        
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
@endsection