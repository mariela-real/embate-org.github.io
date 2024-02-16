
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="{{asset('css/form.css')}}">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/css/intlTelInput.min.css" rel="stylesheet"/>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script>

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
            <input type="tel" name="phone[main]" id="phone_number" />
           <br>
            @if ($errors->has('phone'))
               <span class="text-danger">{{ $errors->first('phone') }}</span>
            @endif

            <select type ="text" name = "subject" value="{{ old('subject') }}"class="browser-default" id="serviceSelect">
               <option value="" disabled selected>Principal servicio que necesitas*</option>
               <option value="Solicitud de asesoramiento">Solicitud de asesoramiento</option>
               <option value="Práctica pre profesional">Práctica pre profesional</option>
               <option value="Pasantía">Pasantía</option>
            </select>
            <br>
            @if ($errors->has('subject'))
                  <span class="text-danger">{{ $errors->first('subject') }}</span>
            @endif

            <textarea name="message" id="area" for="message" placeholder="¿Como podemos ayudar?" maxlength="300"value="{{ old('message') }}"></textarea>
            @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
            @endif
            <h4>Seleccione una fecha </h4>
            <div class="row">
                <input type="date" name="date" id="date" class="date" value="{{ old('date') }}">
                <br>
                @if ($errors->has('date'))
                        <span class="text-danger">{{ $errors->first('date') }}</span>
                @endif

            </div>
            <br>
            <h4>Seleccione una hora </h4>
            <div class="row">
                <div class="col-5">
                <select name="time" id="time" value="{{ old('time') }}"class="form-select">
                    @foreach ($newAvailableTimes as $time)
                    <option value="{{ $time }}">{{ $time }}</option>
                        @endforeach
                </select>
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
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
     <script>
        var phone_number = window.intlTelInput(document.querySelector("#phone_number"), {
        separateDialCode: true,
        preferredCountries:["bo"],
        hiddenInput: "full",
        utilsScript: "//cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/utils.js"
        });

        $("form").submit(function() {
        var full_number = phone_number.getNumber(intlTelInputUtils.numberFormat.E164);
        $("input[name='phone_number[full]'").val(full_number);
        alert(full_number)

        });
    </script>
    <script>
        $('.date').on('change', function () {
            var res = $('.date').val();
            $('#result').html(res);

            $.ajaxSetup({
                headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')},
            });
                $.ajax({
                method: "POST",
                url: "/update_date",
                data: {dateSelected: res, _token: $('meta[name="csrf-token"]').attr('content')},
                success: function(result) {
                    console.log(result);
                },
                error: function(error) {
                    console.error("Error in AJAX request:", error);
                }
            });

        })
    </script>

   </body>

</html>
