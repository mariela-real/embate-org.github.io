
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
<link rel="stylesheet" href="{{asset('css/login.css')}}">

<div class="container-fluid">
  <div class="row d-flex justify-content-center align-items-center login_form" style="">
    <div  class="d-flex" id="formularioEditar">

      <form method="POST" action="login" id="formulario">
      @csrf
      <div class="logo_login">
        <img src="img/OSOS_EMBATE.png" />
      </div>

      <h3 class=text-center>Iniciar sesión</h3>
        <div class="form-row">
          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
              </div>
              <input type="text" name="username"  class="form-control" id="username" placeholder="Usuario"
              autofocus value="{{old('username')}}"/>
            </div>
            @if ($errors->has('username'))
            <span class="error text-danger" id="input-user">{{ $errors->first('username') }}</span>
            @endif
            <br>
          </div>

          <div class="col-12">
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
              </div>
                <input  type="password"  name="password" class="form-control" id="password" placeholder="Contraseña"
                autofocus value="{{old('password')}}" />
                <div class="input-group-append">
                  <span class="input-group-text" onclick="password_show_hide();">
                    <i class="fas fa-eye d-none" id="show_eye"></i>
                    <i class="fas fa-eye-slash " id="hide_eye"></i>
                  </span>
                </div>
            </div>
            @if ($errors->has('password'))
            <span class="error text-danger" id="password">{{ $errors->first('password') }}</span>

            @endif
          </div>

          <div class="col-12 login_buttom">
            <button class="btn btn-dark btn-block btn-lg ed" id="acceder" type="submit">
                Acceder
            </button>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>


<script>
function password_show_hide() {
  var x = document.getElementById("password");
  var hide_eye = document.getElementById("hide_eye");
  var show_eye = document.getElementById("show_eye");

  show_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  } else {
    x.type = "password";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  }
}
</script>

