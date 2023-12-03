
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{asset('css/form.css')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
       
   </head>
   <body>
    <div class="container">
        <div class="text"></div>
        <form action="service" method="POST">
            <div class="form_title">
               <h2>
                  SOLICITAR UNA REUNIÓN
               </h2>
            </div>
        @csrf
            <input type="text" name="firstname" id="firstname" placeholder="Nombre*" class="form-control" value="{{ old('firstname') }}"/>
            @if ($errors->has('firstname'))
                 <span class="text-danger">{{ $errors->first('firstname') }}</span>
            @endif
            <input type="text" name="lastname" id="lastname" placeholder="Apellido*" class="form-control" value="{{ old('lastname') }}"/>
            @if ($errors->has('lastname'))
                 <span class="text-danger">{{ $errors->first('lastname') }}</span>
            @endif
            <input type="email" name="email" id="email" placeholder="Correo electrónico*" class="form-control" value="{{ old('email') }}"/>
            @if ($errors->has('email'))
                 <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
            <select type ="text" name = "subject" value="{{ old('subject') }}"class="browser-default" id="serviceSelect">
               <option value="" disabled selected>Principal servicio que necesitas*</option>
               <option value="Solicitud de asesoramiento">Solicitud de asesoramiento</option>
               <option value="Práctica pre profesional">Práctica pre profesional</option>
               <option value="Pasantía">Pasantía</option>
            </select>
            @if ($errors->has('subject'))
                  <span class="text-danger">{{ $errors->first('subject') }}</span>
            @endif
   
            <textarea name="message" id="area" for="message" placeholder="¿Como podemos ayudar?" maxlength="300"value="{{ old('message') }}"></textarea>
            @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
            <h3>Agenda una cita </h3>
            <div class="horaFecha">
           
            
            <div class="row">
               <div class="col-5">
                  <label for="date">Fecha: </label>
               </div> 
               <input type="date" name="date" id="date" class="date" value="{{ old('date') }}">
               @if ($errors->has('date'))
                     <span class="text-danger">{{ $errors->first('date') }}</span>
               @endif
               <br>
            </div>
            <br>
            <div class="row">
                    <div class="col-5">
                        <label>Horario:</label>
                    </div>
                    <div class="col-5">
                     <select name="time" id="time" value="{{ old('time') }}"class="form-select">
                        <option value="8:30">8:30</option>
                        <option value="8:50">8:50</option>
                        <option value="9:10">9:10</option>
                        <option value="9:30">9:30</option>
                        <option value="9:50">9:50</option>
                        <option value="10:10">10:10</option>
                     </select>
                     @if ($errors->has('time'))
                          <span class="text-danger">{{ $errors->first('time') }}</span>
                     @endif
                    </div>
            </div>
         </div>
            <br>
            <div class="g-recaptcha" data-sitekey="6Lcz_sMoAAAAAKlWj_K7PTb4AHeFUwI7fxJvFdZG"></div>
            @error('g-recaptcha-response')
            <span class="text-danger">{{ $message }}</span>
            @enderror
            <input type="submit" value="Enviar datos"/>
         </form>
     </div>
     <script type="text/javascript" src="{{asset('js/form.js')}}"></script>
 
   </body>
</html>
