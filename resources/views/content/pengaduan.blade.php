<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistem Pengaduan BPS Provinsi NTT</title>
    <link rel="stylesheet" href="/creative/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/creative/css/main.css">

<style>

* {
  box-sizing: border-box;
}

input[type=text], input[type=email], input[type=date], select, textarea {
  width: 95%;
  padding: 15px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}



.containerform {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  align-self: center;
}




/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>   
</head>

<body>
    <header class="header" id="home__header">
        <div class="header__container" style="width:100%;">
            <nav class="navbar navbar-expand-lg navbar-dark header__nav" id="navbar">
            <a href="#home" class="scrollto"><img src="/creative/img/peluit.png" alt="" title="" width="100px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapsible"
                    aria-controls="navbar-collapsible" aria-expanded="false" aria-label="Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse header__collapse-container" id="navbar-collapsible">
                    <ul class="header__ul nav">
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <span class="nav-link__text">Beranda</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#tentang" class="nav-link">
                                <span class="nav-link__text">Tentang</span>
                            </a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#kontak" class="nav-link">
                                <span class="nav-link__text">Kontak</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    
    <section class="home" id="beranda">
        
            <div class="main" style="width:100%;">
	
	<div class="main-inner" style="width:95%; margin:0 auto;">

	    <div class="containerform" style="width:95%; margin:0 auto;">
	
	      <div>
	      	
	      	<div>      		
	      		
	      		<div>
	      			
	      			<div>
	      				<i class="icon-user"></i>
	      				<h2>PENGADUAN</h2>
	  				</div> <!-- /widget-header -->
					
					<div>				
						
								<form id="pengaduan" class="form-horizontal" action="/pengaduan/tambah" method="POST" autocomplete="off">
                                {{csrf_field()}}
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="namaPLabel">Nama Pelapor</label>
											<div class="controls">
												<input type="text" id="nama_pelapor" name="nama_pelapor" value="{{ old('nama_pelapor') }}">
                                                @error('nama_pelapor')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
                                            </div> <!-- /controls -->				
                                        </div> <!-- /control-group -->
                                        <div class="control-group">											
											<label class="control-label" for="namaPLabel">Email Pelapor <i>(Opsional)</i></label>
											<div class="controls">
												<input type="email" id="email_pelapor" name="email_pelapor" value="{{ old('email_pelapor') }}">
                                                @error('email_pelapor')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
                                            </div> <!-- /controls -->				
                                        </div> <!-- /control-group -->
                                        <div class="control-group">											
											<label class="control-label" for="namaPLabel">No. Telepon</label>
											<div class="controls">
                                                <input type="text" id="no_telp_pelapor" name="no_telp_pelapor" value="{{ old('no_telp_pelapor') }}">
                                                @error('no_telp_pelapor')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										<div class="control-group">
                                            <label class="control-label" for="namaPLabel" >Alamat Pelapor</label>
                                            <div class="controls">
                                            <textarea  name="alamat_pelapor" >{{ old('alamat_pelapor') }}</textarea>
                                            @error('alamat_pelapor')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <br>
                                        <div class="control-group">
                                            <label for="exampleInputEmail1" class="control-label">Materi Pengaduan</label>
                                            <div class="controls">
                                            <select name="materi" id="materi">
                                                <option value="" disabled selected>--Pilih--</option>
                                                <option value="Fraud" {{ old('materi') == 'Fraud' ? 'selected="selected"' : '' }}>Fraud</option>
                                                <option value="Kepegawaian" {{ old('materi') == 'Kepegawaian' ? 'selected="selected"' : '' }}>Kepegawaian</option>
                                                <option value="Layanan Statistik" {{ old('materi') == 'Layanan Statistik' ? 'selected="selected"' : '' }}>Layanan Statistik</option>
                                                <option value="Pelayanan Umum" {{ old('materi') == 'Pelayanan Umum' ? 'selected="selected"' : '' }}>Pelayanan Umum</option>
                                            </select>
                                            @error('materi')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="exampleInputEmail1" class="control-label">Lokus Tujuan</label>
                                            <div class="controls">
                                            <select name="tempat_kejadian" id="tempat_kejadian" style="text-align: center;">
                                                <option value="" disabled selected>--Pilih Lokus--</option>
                                                <option value="BPS Provinsi NTT" {{ old('tempat_kejadian') == 'BPS Provinsi NTT' ? 'selected="selected"' : '' }}>BPS Provinsi NTT</option>
                                                <option value="BPS Kab. Sumba Barat" {{ old('tempat_kejadian') == 'BPS Kab. Sumba Barat' ? 'selected="selected"' : '' }}>BPS Kab. Sumba Barat</option>
                                                <option value="BPS Kab. Sumba Timur" {{ old('tempat_kejadian') == 'BPS Kab. Sumba Timur' ? 'selected="selected"' : '' }}>BPS Kab. Sumba Timur</option>
                                                <option value="BPS Kab. Kupang" {{ old('tempat_kejadian') == 'BPS Kab. Kupang' ? 'selected="selected"' : '' }}>BPS Kab. Kupang</option>
                                                <option value="BPS Kab. Timor Tengah Selatan" {{ old('tempat_kejadian') == 'BPS Kab. Timor Tengah Selatan' ? 'selected="selected"' : '' }}>BPS Kab. Timor Tengah Selatan</option>
                                                <option value="BPS Kab. Timor Tengah Utara" {{ old('tempat_kejadian') == 'BPS Kab. Timor Tengah Utara' ? 'selected="selected"' : '' }}>BPS Kab. Timor Tengah Utara</option>
                                                <option value="BPS Kab. Belu" {{ old('tempat_kejadian') == 'BPS Kab. Belu' ? 'selected="selected"' : '' }}>BPS Kab. Belu</option>
                                                <option value="BPS Kab. Alor" {{ old('tempat_kejadian') == 'BPS Kab. Alor' ? 'selected="selected"' : '' }}>BPS Kab. Alor</option>
                                                <option value="BPS Kab. Lembata" {{ old('tempat_kejadian') == 'BPS Kab. Lembata' ? 'selected="selected"' : '' }}>BPS Kab. Lembata</option>
                                                <option value="BPS Kab. Flores Timur" {{ old('tempat_kejadian') == 'BPS Kab. Flores Timur' ? 'selected="selected"' : '' }}>BPS Kab. Flores Timur</option>
                                                <option value="BPS Kab. Sikka" {{ old('tempat_kejadian') == 'BPS Kab. Sikka' ? 'selected="selected"' : '' }}>BPS Kab. Sikka</option>
                                                <option value="BPS Kab. Ende" {{ old('tempat_kejadian') == 'BPS Kab. Ende' ? 'selected="selected"' : '' }}>BPS Kab. Ende</option>
                                                <option value="BPS Kab. Ngada" {{ old('tempat_kejadian') == 'BPS Kab. Ngada' ? 'selected="selected"' : '' }}>BPS Kab. Ngada</option>
                                                <option value="BPS Kab. Manggarai" {{ old('tempat_kejadian') == 'BPS Kab. Manggarai' ? 'selected="selected"' : '' }}>BPS Kab. Manggarai</option>
                                                <option value="BPS Kab. Rote Ndao" {{ old('tempat_kejadian') == 'BPS Kab. Rote Ndao' ? 'selected="selected"' : '' }}>BPS Kab. Rote Ndao</option>
                                                <option value="BPS Kab. Manggarai Barat" {{ old('tempat_kejadian') == 'BPS Kab. Manggarai Barat' ? 'selected="selected"' : '' }}>BPS Kab. Manggarai Barat</option>
                                                <option value="BPS Kab. Sumba Barat Daya" {{ old('tempat_kejadian') == 'BPS Kab. Sumba Barat Daya' ? 'selected="selected"' : '' }}>BPS Kab. Sumba Barat Daya</option>
                                                <option value="BPS Kab. Nagekeo" {{ old('tempat_kejadian') == 'BPS Kab. Nagekeo' ? 'selected="selected"' : '' }}>BPS Kab. Nagekeo</option>
                                                <option value="BPS Kab. Manggarai Timur" {{ old('tempat_kejadian') == 'BPS Kab. Manggarai Timur' ? 'selected="selected"' : '' }}>BPS Kab. Manggarai Timur</option>
                                                <option value="BPS Kab. Sabu Raijua" {{ old('tempat_kejadian') == 'BPS Kab. Sabu Raijua' ? 'selected="selected"' : '' }}>BPS Kab. Sabu Raijua</option>
                                                <option value="BPS Kota Kupang" {{ old('tempat_kejadian') == 'BPS Kota Kupang' ? 'selected="selected"' : '' }}>BPS Kota Kupang</option>
                                                
                                            </select>
                                            @error('tempat_kejadian')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="control-group">
                                            <label for="exampleInputEmail1" class="control-label">Tanggal Kejadian</label>
                                            <div class="controls">
                                            <input type="date" id="tanggal_kejadian" name="tanggal_kejadian" placeholder="Pilih Tanggal Kejadian *" autocomplete="off" value="{{ old('tanggal_kejadian') }}">
                                            @error('tanggal_kejadian')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="namaPLabel" >Terlapor</label>
                                            <div class="controls">
												<input type="text" id="terlapor" name="terlapor" value="{{ old('terlapor') }}">
                                                @error('terlapor')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror
                                            </div> <!-- /controls -->	
                                        </div>
                                        <div class="control-group">
                                            <label class="control-label" for="namaPLabel" >Kronologis Kejadian</label>
                                            <div class="controls">
                                            <textarea  name="kronologi">{{ old('kronologi') }}</textarea>
                                            @error('kronologi')
                                                <span class="alert alert-danger"><br>{{ $message }}</span>
                                                @enderror    
                                        </div>
                                        </div>


                                        <div class="control-group">
                                            <div class="controls">
                                                <button type="submit" class="button btn-primary"  >Kirim Pengaduan</button> 
                                                
                                            </div>
                                        </div>
                                       
							
										
                                        
                                        
										
											
										
									</fieldset>
								</form>
								</div>
								
								
								
						
						
						
						
						
						
					</div> <!-- /widget-content -->
						
				</div> <!-- /widget -->
	      		
		    </div> <!-- /span8 -->
	      	
	      	
	      	
	      	
	      </div> <!-- /row -->
	
	    </div> <!-- /container -->
	    
	</div> <!-- /main-inner -->
    
</div> <!-- /main -->
 
                              
                                
          
    </section>

   
    <section class="portfolio" id="tentang">
        <div class="container" style="width:100%;">
            <h2>Tentang</h2>
            <div class="portfolio__wrapper">
            <div class="row">
                    <div class="col-lg-6">
                        <h3>Tentang Whistleblowing System</h2>
                        <p>Whistleblowing System BPS adalah aplikasi yang disediakan oleh Badan Pusat Statistik bagi Anda yang memiliki informasi dan ingin melaporkan suatu perbuatan berindikasi pelanggaran yang terjadi di lingkungan Badan Pusat Statistik
                            Provinsi Nusa Tenggara Timur. Materi Aduan yang dapat anda sampaikan adalah:</p>
                        <ul>
                            <li>Fraud</li>
                            <li>Kepegawaian</li>
                            <li>Layanan Statistik</li>
                            <li>Pelayanan Umum</li>
                            <li>Saran dan Pertanyaan</li>
                        </ul>
                        <p>BPS menghargai informasi yang Anda laporkan dan fokus kami adalah kepada materi informasi yang anda sampaikan. Anda tidak perlu khawatir terungkapnya identitas diri anda karena kami akan MERAHASIAKAN IDENTITAS DIRI ANDA sebagai
                            whistleblower.</p>
                    </div>
                    <div class="col-lg-6">
                        <h3>Unsur Pengaduan</h3>
                        <p>Pengaduan Anda akan mudah ditindaklanjuti apabila memenuhi unsur sebagai berikut:</p>
                        <ul>
                            <li>What: Perbuatan berindikasi pelanggaran yang diketahui</li>
                            <li>Where: Dimana perbuatan tersebut dilakukan</li>
                            <li>When: Kapan perbuatan tersebut dilakukan</li>
                            <li>Who: Siapa saja yang terlibat dalam perbuatan tersebut</li>
                            <li>How: Bagaimana perbuatan tersebut dilakukan (modus, cara, dsb.)</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

   

    

    

    

    <section class="contact" id="kontak">
        <div class="container" style="width:100%;">
            <h2>Kontak Kami</h2>
            <div class="row">
                <div class="col-md-3 blog__box">
                    <i class="fa fa-phone"></i>
                    <h3>Telepon</h3>
                    <p>(0380) 826289, 821755</p>
                </div>
                <div class="col-md-3 blog__box">
                    <i class="fa fa-globe"></i>
                    <h3>Website</h3>
                    <p><a href="http://ntt.bps.go.id">http://ntt.bps.go.id</a></p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>pst5300@bps.go.id</p>
                </div>
                <div class="col-md-3">
                    <i class="fa fa-map-marker"></i>
                    <h3>Alamat</h3>
                    <p>BPS Provinsi NTT, Jl. R. Suprapto No. 5 Kupang - 85111</p>
                </div>
            </div>
            <!-- <form action="" class="contact__form">
                <div class="form__flex">
                    <input type="text" class="form__name" placeholder="Name">
                    <input type="text" class="form__email" placeholder="Email">
                </div>
                <input type="text" class="form__subject" placeholder="Subject">
                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>
                <button type="submit" class="btn btn-main">Send Message</button>
            </form> -->
        </div>
    </section>

    <footer class="footer">
        <div class="container" style="width:100%;">
        <a href="#home" class="scrollto"><img src="/creative/img/peluit.png" alt="" title="" width="335px"></a><br>
            <div class="footer__sm-box">
                <a href="https://www.facebook.com/bps5300" class="footer__sm-link" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/bps.ntt/" class="footer__sm-link" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://api.whatsapp.com/send?phone=6287820178535" class="footer__sm-link" target="_blank"><i class="fa fa-whatsapp"></i></a>
                <a href="https://www.youtube.com/channel/UCToBos26nIog1oKbN4OPP0Q" class="footer__sm-link" target="_blank"><i class="fa fa-youtube"></i></a>
            </div>
            
            <p class="footer__text">COPYRIGHT © 2020. ALL RIGHTS RESERVED. DESIGNED BY BPS PROVINSI NTT</p>
        </div>
    </footer>

    <script src="/creative/js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="/creative/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/creative/js/main.js"></script>
    <script src="/responsive/js/bootstrap.js"></script>
<script src="/responsive/js/base.js"></script>
@include('sweetalert::alert')
</body>

</html>