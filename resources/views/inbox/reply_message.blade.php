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
        <form form action="messaje" method="POST">
        @csrf
        <div class="row">
                <div class="col-5"><label for="fecha">Fecha: </label></div> 
                    <div class="col-5"><input type="date" name="fecha" id="fecha" class="date"><br></div>
                </div>
                
                <span id="errorf" class="error"></span><br>
                <div class="row">
                    <div class="col-5"><label>Horario:</label></div>
                    <div class="col-5"><select name="horario" id="horario" class="form-select">
                        <option value="6:45">8:30</option>
                        <option value="8:15">8:50</option>
                        <option value="9:45">9:10</option>
                        <option value="11:15">9:30</option>
                        <option value="12:45">9:50</option>
                        <option value="14:15">10:10</option>
                    </select></div>
                </div><br>
            <input type="submit" value="Enviar datos"/>
         </form>
     </div>
     <script type="text/javascript" src="{{asset('js/form.js')}}"></script>
   </body>
</html>