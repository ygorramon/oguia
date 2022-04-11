@extends('site.desafio.layouts.app')
@section('css')
<link type="text/css" rel="stylesheet" href="{{ asset('css/login.css') }}" media="screen,projection" />
@stop



@section('content')
<div class="row">
    <div class="col s12">
        <div class="container">
            <div class="section">
                <div id="card-widgets">
                    <div class="row">
                        <div class="col s12">
                        <!--div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Informação</h4>
      <p>Informo que, durante o feriado de carnaval, o suporte do desafio acontecerá apenas na segunda-feira, 28/02/2022. Retornaremos nossas atividades na quinta-feira, 03/03/2022. </p>
    Dr. Odilo Queiroz
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn-flat">Ok</a>
    </div>
  </div>
<-->

                            <ul id="task-card" class="collection with-header animate fadeLeft">
                                <li class="collection-header red">
                                    <h5 class="task-card-title mb-3">Meus GUIAS</h5>

                                </li>
                                <table class="bordered">
                                    <thead><th>Guia</th><th>Status</th><td>Ações</td></thead>
                                @forelse ($challenges as $key => $challenge)
                                <tr>
                                <td>{{$key+1}}</td><td>{{$challenge->status}}
                                      @if($challenge->status=='RESPONDIDO')
                            <br><br>
                             @endif
                                </td>
                                <td><a href="{{route('desafio.show',$challenge->id)}}" > <span class="task-cat red">Acessar</span></a><br><br>
                          
                            </td>
                                </tr>
                                @empty
                                </table>
                                <form action="{{route('desafio.store')}}" method="POST">
                                    @csrf
                                    <li class="collection-item dismissable">
                                        <button class="btn waves-effect waves-light " type="submit"> Inicie um novo Guia </submit>
                                </form>
                                </li>
                                @endforelse

                                @if(isset($latest_challenge) && $latest_challenge->status=='FINALIZADO')
                                <form action="{{route('desafio.store')}}" method="POST">
                                    @csrf
                                    <li class="collection-item dismissable">
                                        <button class="btn waves-effect waves-light " type="submit"> Inicie um novo Guia </submit>
                                    </li>
                                </form>
                                @endif


                            </ul>
                        </div>

                    </div>
                </div>





                @endsection
            </div>
        </div>
    </div>
</div>

@section('js')
<!--
<script>
$(document).ready(function(){
    $('.modal').modal({
       
    });
    $('#modal1').modal('open');
  });
  </script>
-->
@endsection