@extends('admin.layout')

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title" style="margin-left:40%;color:rgb(3,171,171);font-style:bold;">E-Raport SMPN 1 Tareem</h3>

        <div class="card-tools">
           
        </div>
        </div>
        <div class="card-body">
            
        <div class="row">
          <div class="col-lg-3 col-6"  style="margin-left:12%;">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>VII</h3>
                <p>Data Raport kelas 7</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/datasiswa" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>

          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>VIII</h3>
                <p>Data Raport kelas 8</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/datasiswa2" class="small-box-footer">
              Lihat Data <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>IX</h3>
                <p>Data Raport kelas 9</p>
              </div>
              <div class="icon">
              <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/datasiswa3" class="small-box-footer">
                Lihat Data <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
            
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer">

        </div>
        <!-- /.card-footer-->
    </div>
    <!-- /.card -->
@endsection
 
 <!-- Small Box (Stat card) -->
  