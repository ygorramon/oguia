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

              <div id="bordered-table" class="card card card-default scrollspy">
                <div class="card-content">
                  @if($challenge->status=='ENVIADO')
                  <div class="row">
                    <div class="col s12">
                      <h4 class="card-title">Seu Guia foi Enviado! </h4>
                    </div>
                    <div class="col s12">
                      <h4 class="card-title">Em breve você receberá a análise! </h4>
                    </div>

                  </div>
                  @endif
                  @if($challenge->status=='ANALISE')
                  <div class="row">
                    <div class="col s12">
                      <h4 class="card-title">A dr. Ana Gabriela está analisando seu GUIA! </h4>
                    </div>
                    <div class="col s12">
                      <h4 class="card-title">Em breve você receberá a análise! </h4>
                    </div>

                  </div>
                  @endif
                  @if($challenge->status=='FINALIZADO')
                  <div class="row">
                    <div class="col s12">
                      <h4 class="card-title">Análise do Seu GUIA(Clique em cada Atalho abaixo) </h4>
                    </div>

                    <ul class="collapsible">
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 1 - Respirar</div>
                        <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho1}}</textarea>
                        </div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 2 - Observar o Bebê</div>
                        <div class="collapsible-body"><textarea class="materialize-textarea" readonly> {{$challenge->atalho2}}</textarea></div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 3 - Descartar</div>
                        <div class="collapsible-body">
                          <ul class="collapsible">
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Cansaço demais</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_cansaco}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Imaturidade</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_imaturidade}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Estresse da mãe</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_estress}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Salto de desenvolvimento</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_salto}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Angústia da separação</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_angustia}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Telas</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_telas}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Dor</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_dor}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Fome</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_fome}}</textarea>
                              </div>
                            </li>
                        </div>

                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 4</div>
                        <div class="collapsible-body">
                          <ul class="collapsible">
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ajuste de rotina</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ajustes}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ritual do bom dia</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ritual_dia}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ajuste de ambiente</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ambienete}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Rotina Alimentar</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_rotina_alimentar}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Rotina de sonecas/div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_rotina_soneca}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ritual noturno/div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ritual_noturno}}</textarea>
                              </div>
                            </li>
                          </ul>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 5 - Descartar Associações</div>
                        <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho5}}</textarea>
                        </div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 6 - Aguardar</div>
                        <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho6}}</textarea>
                        </div>
                      </li>
                    </ul>
                    <ul class="collapsible">
                      <li>
                        <div class="collapsible-header"><i class="material-icons">message</i>Chat</div>
                        <div class="collapsible-body">
                         
                          @if($challenge->chat()->first()!=null)
                          @foreach($challenge->chat()->first()->messages as $message)
                          @if($message->type==1)
                          <label >Eu:</label>
                          <textarea class="materialize-textarea" readonly> {{$message->content}}</textarea>
                          @endif
                          @if($message->type==2)
                          <label >dra Ana Gabriela:</label>
                          <textarea class="materialize-textarea" readonly> {{$message->content}}</textarea>
                          @endif
                          @endforeach
                          

                         
                          
@endif
@endif
                  @if($challenge->status=='RESPONDIDO')
                  <div class="row">
                    <div class="col s12">
                      <h4 class="card-title">Análise do Seu Guia (Clique em cada Atalho abaixo) </h4>
                    </div>

                  <ul class="collapsible">
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 1 - Respirar</div>
                        <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho1}}</textarea>
                        </div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 2 - Observar o Bebê</div>
                        <div class="collapsible-body"><textarea class="materialize-textarea" readonly> {{$challenge->atalho2}}</textarea></div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 3 - Descartar</div>
                        <div class="collapsible-body">
                          <ul class="collapsible">
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Cansaço demais</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_cansaco}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Imaturidade</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_imaturidade}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Estresse da mãe</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_estress}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Salto de desenvolvimento</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_salto}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Angústia da separação</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_angustia}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Telas</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_telas}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Dor</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_dor}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Fome</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho3_fome}}</textarea>
                              </div>
                            </li>
                        </div>

                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 4</div>
                        <div class="collapsible-body">
                          <ul class="collapsible">
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ajuste de rotina</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ajustes}}</textarea>
                              </div>
                            </li>
                            <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ritual do bom dia</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ritual_dia}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ajuste de ambiente</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ambienete}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Rotina Alimentar</div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_rotina_alimentar}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Rotina de sonecas/div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_rotina_soneca}}</textarea>
                              </div>
                            </li>
                             <li>
                              <div class="collapsible-header"><i class="material-icons">place</i>Ritual noturno/div>
                              <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho4_ritual_noturno}}</textarea>
                              </div>
                            </li>
                          </ul>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 5 - Descartar Associações</div>
                        <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho5}}</textarea>
                        </div>
                      </li>
                      <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Atalho 6 - Aguardar</div>
                        <div class="collapsible-body"> <textarea class="materialize-textarea" readonly> {{$challenge->atalho6}}</textarea>
                        </div>
                      </li>
                    </ul>
@if ($challenge->status=='RESPONDIDO')
                    <div class="card">
                    <div class="card-content">
                    <span class="card-title"> INFORMAÇÕES SOBRE O CHAT</span>
                       
                      
      
      <p> O CHAT abaixo ficará disponível por 15 Dias após a resposta do seu guia!</p>
      <p> Você só pode colocar uma mensagem até a dr Ana Gabriela responder.</p>
      <p> Esse CHAT finalizará no dia {{\Carbon\Carbon::parse($challenge->answered_at)->addDays(30)->format('d/m/y')}} </p>
      <p> Restam {{\Carbon\Carbon::parse($challenge->answered_at)->addDays(30)->diffInDays(now())}}</b> Dias de Chat </p>
      <p> Após esse prazo, você poderá realizar um novo GUIA </p>
      </div>
    </div>
@endif

                    <ul class="collapsible">
                      <li>
                        <div class="collapsible-header"><i class="material-icons">message</i>Chat  </div>
                        <div class="collapsible-body">
                          @if($challenge->chat()->first()==null)
                          Envie uma mensagem à dr Ana Gabriela sobre seu GUIA!
                          <form action="{{route('challenge.chat.store', $challenge->id)}}" method="POST">
                            @csrf
                            <label >Responder:</label>
                            <textarea class="materialize-textarea" name="message"></textarea>
                            <button class="btn btn-primary">Enviar </button>
                          </form>
                          @endif
                          @if($challenge->chat()->first()!=null)
                          @if($challenge->chat()->first()->status=='mae')
                          @foreach($challenge->chat()->first()->messages as $message)
                          @if($message->type==1)
                          <label >Eu:</label>
                          <textarea class="materialize-textarea" readonly> {{$message->content}}</textarea>
                          
                          @endif
                          @if($message->type==2)
                          <label >dra Ana Gabriela:</label>
                          <textarea class="materialize-textarea" readonly> {{$message->content}}</textarea>
                          
                          @endif
                          @endforeach
                         
                          Aguarde o retorno da dra Ana Gabriela!
<br>
                           <a class="btn btn-primary"href="{{route('client.message.edit',$challenge->chat()->first()->messages->last()->id)}}">Editar última mensagem</a><br>
                          @endif

                         
                          @if($challenge->chat()->first()->status=='odilo')
                          @foreach($challenge->chat()->first()->messages as $message)
                          @if($message->type==1)
                          <label >Eu:</label>
                          <textarea class="materialize-textarea" readonly> {{$message->content}}</textarea>
                          @endif
                          @if($message->type==2)
                          <label >dra Ana Gabriela:</label>
                          <textarea class="materialize-textarea" readonly> {{$message->content}}</textarea>
                          @endif
                          @endforeach
                          <form action="{{route('challenge.chat.store', $challenge->id)}}" method="POST">
                            @csrf
                            <label >Responder:</label>
                            <textarea class="materialize-textarea" name="message" required></textarea>
                            <button class="btn btn-primary">Enviar </button>
                          </form>
                          @endif
@endif
                        </div>
                      </li>

                    </ul>

                  </div>
                  
                  @endif
 @if($challenge->status=='INICIADO')
                  <h4 class="card-title">Análise Diária</h4>

                  <div class="row">
                    <div class="col s12">
                    </div>
                    <div class="col s12">
                      <table class="bordered">
                        <thead>
                          <tr>
                            <th data-field="dia">Dia / Formulário</th>
                            <th data-field="dia">Preenchido?</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            @if(!isset($challenge->analyzes()->where('day','1')->first()->day))
                            <td><a href="{{route('analyze.create',[$challenge->id,1])}}" class="btn waves-effect waves-light red "> Dia 1 </a>
                    </div>
                    @else
                    <td><a href="{{route('analyze.edit',[$challenge->id,1])}}" class="btn waves-effect waves-light red "> Dia 1 </a>
                  </div>
                  @endif

                  @if(isset($challenge->analyzes()->where('day','1')->first()->day))
                  <td><i class="material-icons">check </i>  {{date_format(new DateTime($challenge->analyzes()->where('day','1')->first()->date),'d/m/Y') }}
                  </td>
                  @else
                  <td>NÃO</td>

                  @endif
                  </tr>
                  
                  @if(isset($challenge->analyzes()->where('day','1')->first()->day))
              <tr>
                @if(!isset($challenge->analyzes()->where('day','2')->first()->day))

                <td><a href="{{route('analyze.create',[$challenge->id,2])}}" class="btn waves-effect waves-light red "> Dia 2 </a>
            </div>
            @else
            <td><a href="{{route('analyze.edit',[$challenge->id,2])}}" class="btn waves-effect waves-light red "> Dia 2 </a>
          </div>
          @endif

        
          @if(isset($challenge->analyzes()->where('day','2')->first()->day))
          <td> <i class="material-icons">check</i> {{date_format(new DateTime($challenge->analyzes()->where('day','2')->first()->date),'d/m/Y') }} </td>
          @else
          <td>NÃO</td>

          @endif
          @else
          
          @endif
          </tr>
        


              @if(isset($challenge->analyzes()->where('day','2')->first()->day))
              <tr>
                @if(!isset($challenge->analyzes()->where('day','3')->first()->day))

                <td><a href="{{route('analyze.create',[$challenge->id,3])}}" class="btn waves-effect waves-light red "> Dia 3 </a>
            </div>
            @else
            <td><a href="{{route('analyze.edit',[$challenge->id,3])}}" class="btn waves-effect waves-light red "> Dia 3  </a>
          </div>
          @endif


          @if(isset($challenge->analyzes()->where('day','3')->first()->day))
          <td> <i class="material-icons">check</i> {{date_format(new DateTime($challenge->analyzes()->where('day','3')->first()->date),'d/m/Y') }} </td>
          @else
          <td>NÃO</td>

          @endif
          @else
          
          @endif
          </tr>
         

          @if(isset($challenge->analyzes()->where('day','3')->first()->day))
          <tr>
            @if(!isset($challenge->analyzes()->where('day','4')->first()->day))

            <td><a href="{{route('analyze.create',[$challenge->id,4])}}" class="btn waves-effect waves-light red "> Dia 4 </a>
        </div>
        @else
        <td><a href="{{route('analyze.edit',[$challenge->id,4])}}" class="btn waves-effect waves-light red "> Dia 4 </a>
      </div>
      @endif

      @if(isset($challenge->analyzes()->where('day','4')->first()->day))
      <td> <i class="material-icons">check</i> {{date_format(new DateTime($challenge->analyzes()->where('day','4')->first()->date),'d/m/Y') }}
      </td>
      @else
      <td>NÃO</td>

      @endif
      @else
     
      @endif
      </tr>
      

      @if(isset($challenge->analyzes()->where('day','4')->first()->day))
      <tr>
       

        @if(!isset($challenge->analyzes()->where('day','5')->first()->day))

        <td><a href="{{route('analyze.create',[$challenge->id,5])}}" class="btn waves-effect waves-light red "> Dia 5 </a>
    </div>
    @else
    <td><a href="{{route('analyze.edit',[$challenge->id,5])}}" class="btn waves-effect waves-light red "> Dia 5 </a>
  </div>
  @endif


  @if(isset($challenge->analyzes()->where('day','5')->first()->day))
  <td> <i class="material-icons">check</i> {{date_format(new DateTime($challenge->analyzes()->where('day','5')->first()->date),'d/m/Y') }}
    
  </td>
  @else
  <td>NÃO</td>

  @endif
  @else
  
  @endif
  </tr>
 

  @if(isset($challenge->analyzes()->where('day','5')->first()->day))
  <tr>
    @if(!isset($challenge->analyzes()->where('day','6')->first()->day))

    <td><a href="{{route('analyze.create',[$challenge->id,6])}}" class="btn waves-effect waves-light red "> Dia 6 </a>
</div>
@else
<td><a href="{{route('analyze.edit',[$challenge->id,6])}}" class="btn waves-effect waves-light red "> Dia 6 </a> </div>
  @endif
  @if(isset($challenge->analyzes()->where('day','6')->first()->day))
<td> <i class="material-icons">check</i> {{date_format(new DateTime($challenge->analyzes()->where('day','6')->first()->date),'d/m/Y') }} </td>
@else
<td>NÃO</td>

@endif
@else

@endif
</tr>


@if(isset($challenge->analyzes()->where('day','6')->first()->day))
<tr>

  @if(!isset($challenge->analyzes()->where('day','7')->first()->day))

  <td><a href="{{route('analyze.create',[$challenge->id,7])}}" class="btn waves-effect waves-light red "> Dia 7 </a>
    </div>
    @else
  <td><a href="{{route('analyze.edit',[$challenge->id,7])}}" class="btn waves-effect waves-light red "> Dia 7  </a> </div>
    @endif
    @if(isset($challenge->analyzes()->where('day','7')->first()->day))
  <td> <i class="material-icons">check</i> {{date_format(new DateTime($challenge->analyzes()->where('day','7')->first()->date),'d/m/Y') }} </td>
  @else
  <td>NÃO</td>

  @endif
  @else
  
  @endif
</tr>


@if(isset($challenge->analyzes()->where('day','7')->first()->day))
<tr>

  @if(!isset($challenge->form()->first()->id))

  <td><a href="{{route('analyze.form',$challenge->id)}}" class="btn waves-effect waves-light red "> Formulário Final </a></td>

  @else
  <td><a href="{{route('analyze.form.edit',$challenge->id)}}" class="btn waves-effect waves-light red "> Formulário Final </a> </div>
    @endif


    @if(isset($challenge->form()->first()->id))
  <td> <i class="material-icons">check</i>
    
  </td>
  @else
  <td>NÃO</td>

  @endif
  @else
  
  @endif
</tr>
<tr>
  <td>
  <a href="{{route('client.profile.edit')}}" class="btn waves-effect waves-light red "> Meus Dados </a>
  </td>
  <td></td>
</tr>


@if(isset($challenge->form()->first()->id))
<tr>
  <td>
    <form action="{{route('desafio.update',$challenge->id)}}" method="POST">
      @csrf
      {{ method_field('PUT') }}
      <button class="btn">Enviar GUIA</button>
  </td>
  <td></td>
</tr>



@endif

</tbody>
</table>
</div>
</div>


@endif
</div>
</div>

</div>

</div>
</div>





@endsection
</div>
</div>
</div>
</div>

@section('js')
<script>
  @if(session('sucesso'))
  M.toast({
    html: '{{session('sucesso')}}'
  })
  @endif
  $(document).ready(function() {
    $('.collapsible').collapsible({
      accordion: true
    });
  });
</script>

@endsection