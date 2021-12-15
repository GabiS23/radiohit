@extends('principal.visita.layout_visita')
@section('content')
<section id="services" class="section1">
    <div class="container">
        <div class="row  align-items-center">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="service-item">
                    <div class="hache1">
                        <h1>Radio hit</h1>
                    </div>
                    <div class="service-icon"><img src="./visita/imagen_empresa/locutor/uno.jpg" alt="" height=70 style="border-radius:50px;float:none;"></i></div>
                    <h4 class="service-title"><a href="" ><b>Morning Show </b> </a></h4>
                    <p class="service-description">Lunes a viernes 6:00 AM</p>
                </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="btn-programacion">
                    <a href="#" class="btn btn-uno">Programación completa</a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-global">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2 style="margin-left:10px;">Anuncie en Radio HIT</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!--gabriela seccion servicio contenido-->
                <div class="container-servicio-descripcion">
                    <div class="anuncie item-servicio">
                        <div class="item-text-servicio">
                            <div class="map-responsive">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3807.867067413322!2d-66.16142658450727!3d-17.37012846830473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37548b09c559b%3A0x6f3bd95c1759421f!2sMente%20Digital%20Bolivia!5e0!3m2!1ses!2sbo!4v1635808248069!5m2!1ses!2sbo" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="mision  item-servicio">
                        <div class="item-text-servicio">
                            <div class="formulario-contacto" style="text-align:center; padding-right:20px;padding-left:20px;">
                                <br>
                                <h2>CONTACTO</b></h2>
                                <!-- <p style="color:#000">Nos encantaría escucharte y saber lo que necesitas</p> -->
                                <br>
                                <img loading="lazy" src="./visita/imagen_empresa/logos/logoRadioHit.png" class="" alt="logo radio hit" height="120">
                                <br>
                                <div class="informacion thumbnail">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"></label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1"></label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Correo electrónico">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1"></label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mensaje">
                                        </div>
                                    
                                    </form> 
                                </div>
                                <div class=""style="width:100% !important;">
                                    <br>
                                    <a href="#" class="btn-contacto"style="width:100%;padding:10px;"><b>Enviar</b></a>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--fin seccion-->
            </div>
        </div>
    </div>
</section>
<br>
<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h2 style="margin-left:10px;">Nuestros trabajos</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="contenido-noticia-pasada">
                    <div class="iframe">
                        <iframe class="imagen-noticia-pasada" width="100%" height="350" src="https://www.youtube.com/embed/v7-CsxH6oxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p class="titulo-noticia-pasada2" style="padding: 10px 0px 10px 0px;">
                        <b>Entrevista a:</b>  Claudia Luizaga
                        <br>
                        <b>EL ABC DEL EMPRENDEDOR, SECRETOS PARA EL ÉXITO</b>
                        <br>
                        <b>Mente digital Bolivia</b>
                        <br>
                        23 de noviembre 2021
                        <br>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contenido-noticia-pasada">
                    <div class="iframe">
                        <iframe class="imagen-noticia-pasada" width="100%" height="350" src="https://www.youtube.com/embed/v7-CsxH6oxA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <p class="titulo-noticia-pasada2" style="padding: 10px 0px 10px 0px;">
                        <b>Entrevista a:</b>  Claudia Luizaga
                        <br>
                        <b>EL ABC DEL EMPRENDEDOR, SECRETOS PARA EL ÉXITO</b>
                        <br>
                        <b>Mente digital Bolivia</b>
                        <br>
                        23 de noviembre 2021
                        <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<br><br>

@stop