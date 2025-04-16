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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                  
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material" action="/pengaduan/{{$pengaduan->id_pengaduan}}/update" method="POST" >
                                {{csrf_field()}}
                                    <div class="form-group">
                                        <label class="col-md-12">Nama Pelapor</label>
                                        <div class="col-md-12">
                                            <input type="text" name="nama_pelapor"  class="form-control form-control-line " disabled value="{{$pengaduan->nama_pelapor}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email Pelapor</label>
                                        <div class="col-md-12">
                                            <input type="text" name="email_pelapor" class="form-control form-control-line " disabled value="{{$pengaduan->email_pelapor}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No. Telp Pelapor</label>
                                        <div class="col-md-12">
                                            <input type="text" name="no_telp_pelapor"  class="form-control form-control-line " disabled value="{{$pengaduan->no_telp_pelapor}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Alamat</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="alamat_pelapor" class="form-control form-control-line" disabled >{{$pengaduan->alamat_pelapor}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Materi</label>
                                        <div class="col-md-12">
                                            <input type="text" name="materi" class="form-control form-control-line " disabled value="{{$pengaduan->materi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Kejadian</label>
                                        <div class="col-md-12">
                                            <input type="text" name="tanggal_kejadian" class="form-control form-control-line " disabled value="{{$pengaduan->tanggal_kejadian}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tempat Kejadian</label>
                                        <div class="col-md-12">
                                            <input type="text" name="tempat_kejadian" class="form-control form-control-line " disabled value="{{$pengaduan->tempat_kejadian}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Terlapor</label>
                                        <div class="col-md-12">
                                            <input type="text" name="terlapor" class="form-control form-control-line " disabled value="{{$pengaduan->terlapor}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Kronologi</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="kronologi" class="form-control form-control-line" disabled >{{$pengaduan->kronologi}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tindak Lanjut</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="tindak_lanjut" class="form-control form-control-line " autocomplete="off">{{$pengaduan->tindak_lanjut}}</textarea>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update</button>
                                            
                                        <a href="/admin/pengaduan" class="btn btn-primary">Kembali</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Xtreme Admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
            </div>
            @endsection
            @section('footer')
            
            <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
            
        
            @endsection