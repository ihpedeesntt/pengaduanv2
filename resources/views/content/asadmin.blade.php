@extends('layout.admin')


@section('content')
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
            <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Aspirasi</h4>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Daftar Aspirasi</h6>
                                <form action="/aspirasi/export" method="POST">
                                {{csrf_field()}}
                                    <div class="form-row">
                                        <div class="col-md-2">
                                            <input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date"  />
                                        </div>
                                        s / d
                                        <div class="col-md-2">
                                            <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date"  />
                                        </div>
                                        <div class="col-md-4">
                                            <button type="submit" name="refresh" id="refresh" class="btn btn-default">Export</button>
                                        </div>
                                    </div>
                                </form>
                                <div class="table-responsive m-t-20">
                                    <table class="table table-bordered table-responsive-lg" id="aspirasiTabel">
                                        <thead>
                                            <tr>
                                                <th  scope="col" style="text-align: center;">#</th>
                                                <th scope="col" style="text-align: center;">Nama Pengirim </th>
                                                
                                                <th scope="col" style="text-align: center;">Instansi Tujuan </th>
                                                <th scope="col" style="text-align: center;">Judul Aspirasi </th>
                                                <th scope="col" style="text-align: center;">Aspirasi</th>
                                                
                                                <th scope="col" style="text-align: center;">Tanggal Masuk</th>
                                                <th scope="col" style="text-align: center;">Tindak Lanjut</th>
                                                
                                                <th scope="col" style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($aspirasi as $p)
                                            
                                                <tr>
                                                    <td class="text-center">{{$loop->index +1}}</td>
                                                    <td class="text-center">{{$p->nama_aspirasi}}</td>
                                                    
                                                    <td class="text-center">{{$p->instansi_aspirasi}}</td>
                                                    <td class="text-center">{{$p->judul_aspirasi}}</td>
                                                    <td class="text-center">{{$p->isi_aspirasi}}</td>
                                                    <td class="text-center">{{ $p->created_at->todatestring() }} </td>
                                                    <td class="text-center">{{$p->tindak_lanjut}}</td>
                                                    
                                                    <td class="text-center"><a href="/aspirasi/{{$p->id_aspirasi}}/edit" class="btn btn-warning btn-sm">Lihat</a></td>
                                                </tr>
                                               
                                            @endforeach
                                                                        
                                        </tbody>
                                    </table>
                                </div>
                   
                            </div>
                          
                        </div>
                    </div>
                    
                  
                    
                    
                    
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            
            
            </div>
            
            @endsection
            
            @section('footer')
            
            <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>
            <script>
            let table = $('#aspirasiTabel').DataTable({sDom: 'lrtip'});
            $(document).ready(function() {
            $('#aspirasiTabel').DataTable();
        } );
        </script>
        
            @endsection