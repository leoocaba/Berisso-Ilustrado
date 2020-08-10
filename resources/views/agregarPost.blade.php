@section('style-second')
    <link rel="stylesheet" href="/css/estilo-agregarPost.css">
@endsection
<div class="col-12 col-md-8 d-flex justify-content-center">
    
    <!-- Button trigger modal -->
    {{-- <div class="container contenedor alert d-flex justify-content-center p-0 mt-2 mb-3">
        <button type="button" class="__btn-modal btn btn-link text-decoration-none col-lg-8 p-0" data-toggle="modal" data-target="#exampleModalCenter">
            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>
            <span class="span"></span>
            POSTEAR
           </button>
    </div> --}}
       
       <!-- Modal -->
       <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content">
             <div id="subirImagenes" style="border-radius: 10px!important;" class="col-12 py-3">
                 <div class="row">
                     <form class="__form col-11 border m-auto pt-3 pl-2 pb-3 pr-2" method="POST" action="/subir/imagenes" enctype="multipart/form-data">
                         {{csrf_field()}}
             
                         <div class="form-group mb-3">
                             <label for="title" class="badge badge-pill badge-primary col-12">TÍTULO</label>
                             <input type="text" class="form-control control-label" name="title" id="title" aria-describedby="title" placeholder="Título..." required>
                         </div>
             
                         <div class="form-group mb-3">
                             <label for="textarea" class="badge badge-pill badge-primary col-12">DESCRIPCIÓN</label>
                             <textarea class="form-control control-label" name="description" id="textarea" rows="3" placeholder="Describí tu posteo..." aria-describedby="textarea" required></textarea>
                         </div>
             
                         <div class="form-group mb-3">
                             <label for="file control-label" class="badge badge-pill badge-primary col-12">SELECCIONÁ TUS IMÁGENES</label>
                             <div class="control-label">
                                 <div class="text-nowrap d-flex justify-content-center" id="div_file">  
                                     <p id="texto"><i class='__icono-camara fas fa-camera-retro icon-file_open text-wrap'></i> </p>   
                                     <input type="file" style="cursor: pointer;" value="{{ old('image') }}" name="image[]" multiple class="form-control" id="btn_enviar" required>
                                    </div>
                             </div>
                         </div>
                         <button type="submit" class="__btn-publicar btn btn-dark col-12 text-uppercase">Publicar</button>
                     </form>
                 </div>
             </div>
    
             <div class="modal-footer">
                <button type="button" class="__btn-cerrar btn btn-danger btn-block mx-auto text-uppercase col-12 col-sm-10 col-lg-8 container" data-dismiss="modal">Cerrar</button>
             </div>
    
           </div>
         </div>
       </div>
     
    </div>
