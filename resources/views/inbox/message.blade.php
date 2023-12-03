@extends('layouts.main', ['activePage' => 'message', 'titlePage' => __('Detalle del Mensaje')])
@section('content')

  <link rel="stylesheet" href="{{asset('css/message_detail.css')}}" />

    <div id="Container" class="content">
        <div id="tipos">
          <div class="detail_header">

            <span class="tipo_m"><b>Email:</b> {{$show_messages->email }}</span>
            <span class="tipo_m"> <b>Fecha:</b> {{$show_messages->created_at }}</span>

          </div>
          <div class="detail_body">
            <span class="tipo_m"><b>Nombre:</b> {{$show_messages->firstname . ' ' . $show_messages->lastname}}</span>
            <span class="tipo_m"><b>Asunto:</b> {{$show_messages->subject }}</span>
            <span class="tipo_m"> <b>Mensaje:</b> {{$show_messages->message }}</span>
          </div>
          <div class="detail_footer">
            <button class="btn" id="btn_aceptar" onclick="goBack()">Cancelar </button>
            <button class="btn" id="btn_aceptar">Posponer</button>
          </div>

        </div>
    </div>
    <script>
      function goBack() {
          window.history.back();
      }
  </script>
@endsection


