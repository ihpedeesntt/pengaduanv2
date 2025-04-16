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
                                <h4 class="card-title">Pengaduan</h4>
                                <h6 class="card-title m-t-40"><i class="m-r-5 font-18 mdi mdi-numeric-1-box-multiple-outline"></i> Daftar Pengaduan</h6>
                                
                                <form action="/pengaduan/export" method="POST">
                                {{csrf_field()}}
                                    <div class="form-row">
                                            <div class="col-md-2">
                                                <input type="date" name="from_date" id="from_date" class="form-control" placeholder="From Date" />
                                            </div>
                                            s / d
                                            <div class="col-md-2">
                                                <input type="date" name="to_date" id="to_date" class="form-control" placeholder="To Date" />
                                            </div>
                                    
                                            <!-- Export Button -->
                                            <div class="col-md-1">
                                                <button type="submit" name="refresh" id="refresh" class="btn btn-default w-100">Export</button>
                                            </div>
                                    
                                            <!-- Filter Button -->
                                            <div class="col-md-1">
                                                <button type="button" name="filter" id="filter" class="btn btn-success w-100">Filter</button>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="button" name="reset" id="reset" class="btn btn-danger w-100">Reset</button>
                                            </div>
                                        </div>
                                </form>
                                
                                <div class="table-responsive m-t-20">
                                    <table class="table table-bordered table-responsive-lg" id="pengaduanTabel">
                                        <thead>
                                            <tr>
                                                <th  scope="col" style="text-align: center;">#</th>
                                                <th scope="col" style="text-align: center;">Nama Pelapor</th>
                                                <th scope="col" style="text-align: center;">Materi </th>
                                                <th scope="col" style="text-align: center;">Tempat Kejadian</th>
                                                <th scope="col" style="text-align: center;">Tanggal Kejadian</th>
                                                <th scope="col" style="text-align: center;">Terlapor</th>
                                                <th scope="col" style="text-align: center;">Kronologi</th>
                                                <th scope="col" style="text-align: center;">Tanggal Masuk</th>
                                                <th scope="col" style="text-align: center;">Tindak Lanjut</th>
                                                <th scope="col" style="text-align: center;">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            @foreach($pengaduan as $p)
                                            
                                                <tr>
                                                    <td class="text-center">{{$loop->index +1}}</td>
                                                    <td class="text-center">{{$p->nama_pelapor}}</td>
                                                    <td class="text-center">{{$p->materi}}</td>
                                                    <td class="text-center">{{$p->tempat_kejadian}}</td>
                                                    <td class="text-center">{{$p->tanggal_kejadian}}</td>
                                                    <td class="text-center">{{$p->terlapor}}</td>
                                                    <td class="text-center">{{$p->kronologi}}</td>
                                                    <td class="text-center">{{ $p->created_at->todatestring()}} </td>
                                                    <td class="text-center">{{$p->tindak_lanjut}}</td>

                                                    <td class="text-center"><a href="/pengaduan/{{$p->id_pengaduan}}/edit" class="btn btn-warning btn-sm">Lihat</a></td>
                                                </tr>
                                               
                                            @endforeach
                                                                        
                                        </tbody>
                                    </table>
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
            <script type="text/javascript" src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>

            <!--<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.21/datatables.min.js"></script>-->
                       
            <script>
                $(document).ready(function() {
                    let table = $('#pengaduanTabel').DataTable({ sDom: 'lrtip' });
            
                    $('#filter').on('click', function() {
                        var min = $('#from_date').val();
                        var max = $('#to_date').val();
                        
                        $.fn.dataTable.ext.search.push(function(settings, data, dataIndex) {
                            var date = new Date(data[4]); // Assuming column 4 is the date column
            
                            // If there are no dates selected, show all rows
                            if (
                                (min === "" && max === "") ||
                                (min === "" && date <= new Date(max)) ||
                                (new Date(min) <= date && max === "") ||
                                (new Date(min) <= date && date <= new Date(max))
                            ) {
                                return true;
                            }
                            return false;
                        });
            
                        table.draw();
                    });
            
                    $('#reset').on('click', function() {
                        $('#from_date').val('');
                        $('#to_date').val('');
            
                        $.fn.dataTable.ext.search = []; 
            
                        table.draw();
                    });
                });
            </script>
        
            @endsection