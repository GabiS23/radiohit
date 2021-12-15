@extends('principal.visita.layout_visita')
@section('content')
<section id="top" class="section2">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="service-item">
                    <div class="service-icon"><img src="./visita/imagen_empresa/locutor/uno.jpg" alt="" height=70></i></div>
                    <h2 style="margin-left: 110px;">El top de las 20 mejores canciones de la semana</h2>
                    <p class="service-description">Sábado 27 de Noviembre 2021</p>
                </div>
            </div>
        </div>
        <div class="top">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="./visita/imagen_empresa/locutor/uno.jpg" alt="" height=70 style="border-radius:50px;float:none;"> </i></div>
                        <h4 class="service-title"><a href="" ><b>1. Doja Cat</b> </a></h4>
                        <p class="service-description">Kiss Me More ft SZA</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="" >
                        <a href="" style="float: right;"><i class="fa-top fa-top fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="top">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="./visita/imagen_empresa/locutor/uno.jpg" alt="" height=70 style="border-radius:50px;float:none;"> </i></div>
                        <h4 class="service-title"><a href="" ><b>1. Doja Cat</b> </a></h4>
                        <p class="service-description">Kiss Me More ft SZA</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="" >
                        <a href="" style="float: right;"><i class="fa-top fa-top fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div><div class="top">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="service-item">
                        <div class="service-icon"><img src="./visita/imagen_empresa/locutor/uno.jpg" alt="" height=70 style="border-radius:50px;float:none;"> </i></div>
                        <h4 class="service-title"><a href="" ><b>1. Doja Cat</b> </a></h4>
                        <p class="service-description">Kiss Me More ft SZA</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="" >
                        <a href="" style="float: right;"><i class="fa-top fa-top fa fa-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <p>
    </p>
   <br><br><br><br><br>
   <div id="obj1">
    <a href="javascript:document.getElementById('obj1').style.display='none';void 0 #collapseExample" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="collapseExample" class="center btn-dos btn">
    Ver lista completa</a>
   </div>
   <div class="collapse" id="collapseExample">
        <div class="row  align-items-center top">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="service-item">
                    <div class="service-icon"><img src="./visita/imagen_empresa/locutor/uno.jpg" alt="" height=70 style="border-radius:50px;float:none;"> </i></div>
                    <h4 class="service-title"><a href="" ><b>1. Doja Cat</b> </a></h4>
                    <p class="service-description">Kiss Me More ft SZA</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <a  href="" style="float: right;"><i class="fa-top fa fa-play" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <audio controls>
        <source src="./visita/imagen_empresa/mp3/iamess.mpeg" type="audio/mpeg">
        <source src="forelisa.ogg" type="audio/ogg">
        <source src="forelisa.wav" type="audio/wav">
            Tu navegador no soporta audio HTML5.
    </audio>
    <audio controls>
        <source src="./visita/imagen_empresa/mp3/iamess.mpeg" type="audio/mpeg">
        <source src="forelisa.ogg" type="audio/ogg">
        <source src="forelisa.wav" type="audio/wav">
            Tu navegador no soporta audio HTML5.
    </audio>


   <!-- <div id="obj1">Bloque de texto</div>
   <a href="javascript:document.getElementById('obj1').style.display='none';void 0">Ocultar</a> -->
        <br>
        <br><br><br>
    </div>


    
</section>
<script>
function ocultar(){
document.getElementById('obj1').style.display = 'none';
}
function mostrar(){
document.getElementById('obj2').style.display = 'block';
}
</script>
@stop