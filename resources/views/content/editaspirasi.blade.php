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
                                <form class="form-horizontal form-material" action="/aspirasi/{{$aspirasi->id_aspirasi}}/update" method="POST">
                                {{csrf_field()}}
   
                                <div class="form-group">
                                        <label class="col-md-12">Nama Pengirim</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line " disabled value="{{$aspirasi->nama_aspirasi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Email Pengirim</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line " disabled value="{{$aspirasi->email_aspirasi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">No. Telp Pengirim</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line " disabled value="{{$aspirasi->no_telp_aspirasi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Alamat Pengirim</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" disabled >{{$aspirasi->alamat_aspirasi}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Judul Aspirasi</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line " disabled value="{{$aspirasi->judul_aspirasi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Instansi</label>
                                        <div class="col-md-12">
                                            <input type="text"  class="form-control form-control-line " disabled value="{{$aspirasi->instansi_aspirasi}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Aspirasi</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line" disabled >{{$aspirasi->isi_aspirasi}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tindak Lanjut</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" name="tindak_lanjut" class="form-control form-control-line " autocomplete="off">{{$aspirasi->tindak_lanjut}}</textarea>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Update</button>
                                            
                                        <a href="/admin/aspirasi" class="btn btn-primary">Kembali</a>
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