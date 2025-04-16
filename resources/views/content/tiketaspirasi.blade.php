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
div.container4 {
    height: 10em;
     }
div.container4 p {
    margin: 0;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%) 
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
            <a href="/" class="scrollto"><img src="/creative/img/peluit.png" alt="" title="" width="100px"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapsible"
                    aria-controls="navbar-collapsible" aria-expanded="false" aria-label="Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
            </nav>
        </div>
    </header>
    
    <section class="home" id="beranda">   
    <div class="main">
	    <div class="main-inner" style="width:95%; margin:0 auto;">
            <div class="containerform" style="width:95%; margin:0 auto;">      			      		
                    <div class="center">
                        <i class="icon-user"></i>
                        <h2>Terima Kasih atas Aspirasi anda </h2>
                        
                        <h3 style="text-align:center;margin: 0;">Mohon dicatat nomor tiket anda, Nomor Tiket Anda dibawah ini :</h3>
                        @if (session('tiket'))
                                <!-- <input type="text" style="text-align:center;" value=" {{ session('data') }}"> -->
                                <h3 style="text-align:center;margin: 0;">{{ session('tiket') }}</h3>
                        @endif
                     
                </div> <!-- /row -->
            
                </div> <!-- /container -->
                
            </div> <!-- /main-inner -->
            
        </div> <!-- /main -->   
            
    </section>

 

    <script src="/creative/js/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="/creative/js/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="/creative/js/main.js"></script>
    
</body>

</html>