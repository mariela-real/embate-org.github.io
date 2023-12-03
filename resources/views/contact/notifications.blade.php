
@extends('layouts.main', ['activePage' => 'notifications', 'titlePage' => __('Notificaciones')])
@section('content')
<link rel="stylesheet" href="{{asset('css/message_box.css')}}" />

<div class="content">
    <table class="table">
         <thead>
            <th>Nombre</th>
            <th>Asunto</th>
            <th>Fecha</th>

        </thead>
        <tbody>
            @foreach($show_messages as $show_message)
            <tr class="efecto {{$show_message->state}}" data-url="{{route('message',['id'=>$show_message->id])}}">
            <td>{{$show_message->firstname . ' ' . $show_message->lastname}}</td>
            <td>{{$show_message->subject}}</td>
            <td>{{$show_message->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  @yield('js')
  <script>
    $(function () {$('table.table tr').click(function ()
      {
      if( $(this).data('url')!=null)
      {
        window.location.href = $(this).data('url');
      }
       });
    })
  </script>
<script>
  var menu=document.getElementsByClassName("nav-link");
  var btn_menu=document.getElementById("menu")
  btn_menu.onclick=function()
  {
    if(btn_menu.innerHTML=="menu")
    {
      for(var i=0 ; i<menu.length;i++)
      {
       menu[i].style.display="block"
      }
       btn_menu.innerHTML="close";
    }
    else
    {
      for(var i=0 ; i<menu.length;i++)
      {
        menu[i].style.display="none"
      }
      btn_menu.innerHTML="menu";
    }
  }
</script>
<script>
 var received=document.getElementById("received")
 var sent=document.getElementById("sent")
 received.style.background="grey"
</script>
