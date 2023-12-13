<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/footer.css')}}">
</head>

<footer>
    <div class="content__footer">
        <div class="content__info">
            <h1>Únete a nuestra comunidad</h1>
            <p>Mantente siempre actualizado con las últimas noticias, eventos imperdibles, talleres y mas.</p>
            <p>
                ¡<strong>EMBATE</strong> es una buena idea!
            </p>
        </div>
      <form action="home" method="POST">
        @csrf
            <div class="input__list">
                <div class="input__item">
                    <input type="text"  name="firstname" value="{{ old('firstname') }}" placeholder="" >
                    <label>NOMBRE</label>
                    @if ($errors->has('firstname'))
                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                    @endif
                </div>
                <div class="input__item">
                    <input type="text"  name="lastname" value="{{ old('lastname') }}" placeholder="">
                    <label>APELLIDO</label>

                    @if ($errors->has('lastname'))
                    <span class="text-danger">{{ $errors->first('lastname') }}</span>
                    @endif
                </div>
                <div class="input__item">
                    <input type="text"  name="email" value="{{ old('email') }}" placeholder="">
                    <label>CORREO ELECTRÓNICO</label>

                    @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>

            </div>

       </form>
       <div class="button_join">
        <button type="submit" class="button__start">UNIRME</a>
        </div>
    </div>
    <script src="{{asset('js/app.js')}}"></script>
    @if (session('register')=='ok')
    <script>
      Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Subscripción añadida',
      showConfirmButton: false,
      timer: 1500
    })
    </script>
    @endif
</footer>

</html>
