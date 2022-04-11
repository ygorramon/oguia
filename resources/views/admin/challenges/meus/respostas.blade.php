@extends('adminlte::page')

@section('title', 'Desafios disponiveis')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('challenge.availables') }}" class="active">Desafios
                Diponíveis</a></li>
    </ol>

@stop

@section('content')

    <form action="{{ route('challenge.meus.responder.update', $challenge->id) }}" method="POST">
        @csrf
        {{ method_field('PUT') }}
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Atalho 1 - Respirar</h3>

            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6 ">
                            <label for="nomeMae">Nome da Mãe/Pai:</label>

                            <div>
                                <input type="text" readonly class="form-control" id="nomeMae"
                                    value="{{ $challenge->client->name }}" placeholder="nomeMae">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="nomeBebe">Nome do(a) Bebê:</label>

                            <div>
                                <input type="text" readonly class="form-control" id="nomeBebe"
                                    value="{{ $challenge->client->nameBaby }}" placeholder="nomeMae">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 ">
                            <label for="nascimentoBebe">Data de Nascimento do Bebê:</label>

                            <div>
                                <input type="text" readonly class="form-control" id="nascimentoBebe"
                                    value="{{ \Carbon\Carbon::parse($challenge->client->birthBaby)->format('d/m/Y') }}"
                                    placeholder="nomeMae">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="idadeBebe">Idade do Bebê: (DIAS / MESES)</label>

                            <div>
                                <input type="text" readonly class="form-control" id="idadeBebe"
                                    value="{{ now()->diffInDays(\Carbon\Carbon::parse($challenge->client->birthBaby)) }} / {{ now()->diffInMonths(\Carbon\Carbon::parse($challenge->client->birthBaby)) }}"
                                    placeholder="nomeMae">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="sexoBebe">Sexo do Bebê:</label>

                            <div>
                                <input type="text" readonly class="form-control" id="sexoBebe"
                                    value="{{ $challenge->client->sexBaby == 'M' ? 'MASCULINO' : 'FEMININO' }}"
                                    placeholder="nomeMae">
                            </div>
                        </div>
                    </div>

                </div>
                <textarea name="atalho1" class="form-control" style="height:auto">{{ $challenge->atalho1 }}</textarea>
            </div>
        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Atalho 2 - Observar o Bebê</h3>
            </div>
            <div class="card-body">
                <div>
                    <label for="ritualBomDia">Causa dos Despertares:</label>
                    @if ($challenge->form->conclusionImmaturity == 'S')
                        <span class="badge bg-green">Imaturidade</span>
                    @endif

                    @if ($challenge->form->conclusionHungry == 'S')
                        <span class="badge bg-green">Fome</span>
                    @endif
                    @if ($challenge->form->conclusionAche == 'S')
                        <span class="badge bg-green">Dor</span>
                    @endif
                    @if ($challenge->form->conclusionJump == 'S')
                        <span class="badge bg-green">Salto de Desenvolvimento</span>
                    @endif

                    @if ($challenge->form->conclusionAnguish == 'S')
                        <span class="badge bg-green">Angústia da Separação</span>
                    @endif
                    @if ($challenge->form->conclusionScreens == 'S')
                        <span class="badge bg-green">Telas</span>
                    @endif
                    @if ($challenge->form->conclusionScreens == 'S')
                        <span class="badge bg-green">Estresse excessivo</span>
                    @endif
                    Idade do Bebê: <span
                        class="badge bg-green">{{ now()->diffInMonths(\Carbon\Carbon::parse($challenge->client->birthBaby)) }}
                        MESES</span>
                    <div>
                        <label for="ritualBomDia">Ganho de Peso:</label>
                        @if (is_numeric($challenge->form->weightGain))
                            <span class="badge bg-green">{{ $challenge->form->weightGain }}</span>
                        @else
                            <span class="badge bg-red">Não Sabe ou Perdeu Peso</span>
                        @endif
                    </div>
                </div>



            </div>
            <textarea name="atalho2" class="form-control" style="height:auto">{{ $challenge->atalho2 }}</textarea>

        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Atalho 3 - Descartar</h3>

            </div>
            <div class="card-body">
            </div>
            <div class="card-header">
                <h3 class="card-title ">Cansaço demais </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_cansaco" class="form-control"
                    style="height:auto">{{ $challenge->atalho3_cansaco }}</textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Imaturidade </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_imaturidade" class="form-control" style="height:auto">
           {{ $challenge->atalho3_imaturidade }}

            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Estresse da mãe </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_estress" class="form-control" style="height:auto">
                      {{ $challenge->atalho3_estress }}


            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Salto de desenvolvimento </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_salto" class="form-control" style="height:auto">
                                 {{ $challenge->atalho3_salto }}


            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Angústia da separação </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_angustia" class="form-control" style="height:auto">

                                 {{ $challenge->atalho3_angustia }}

            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Telas </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_telas" class="form-control" style="height:auto">
                                             {{ $challenge->atalho3_telas }}
</textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Dor </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_dor" class="form-control" style="height:auto">
                                                        {{ $challenge->atalho3_dor }}


            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Fome </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho3_fome" class="form-control" style="height:auto">

                                                        {{ $challenge->atalho3_fome }}

            </textarea>
            </div>


        </div>

        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title ">Atalho 4 </h3>
            </div>
            <div class="card-body">
                <div>
                    <div class="row">
                        <div class="col-md-3 ">


                            <div>
                                <label for="ritualBomDia">Ritual do Bom dia:</label>
                                @if ($challenge->form->ritualGoodMorning == 'S')
                                    <span class="badge bg-green">SIM</span>
                                @else
                                    <span class="badge bg-red">NÃO</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2 ">


                            <div>
                                <label for="ritualBomDia">Ritual -Luzes:</label>
                                @if ($challenge->form->ritualGoodMorningLight == 'S')
                                    <span class="badge bg-green">SIM</span>
                                @else
                                    <span class="badge bg-red">NÃO</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2 ">


                            <div>
                                <label for="ritualBomDia">Ritual-Ruídos:</label>
                                @if ($challenge->form->ritualGoodMorningNoise == 'S')
                                    <span class="badge bg-green">SIM</span>
                                @else
                                    <span class="badge bg-red">NÃO</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2 ">


                            <div>
                                <label for="ritualBomDia">Ritual-Estímulos:</label>
                                @if ($challenge->form->ritualGoodMorningStimulus == 'S')
                                    <span class="badge bg-green">SIM</span>
                                @else
                                    <span class="badge bg-red">NÃO</span>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-2 ">


                            <div>
                                <label for="ritualBomDia">Ritual-Remove:</label>
                                @if ($challenge->form->ritualGoodMorningRemove == 'S')
                                    <span class="badge bg-green">SIM</span>
                                @else
                                    <span class="badge bg-red">NÃO</span>
                                @endif
                            </div>
                        </div>

                    </div>

                </div>


            </div>
            <div class="card-header">
                <h3 class="card-title ">Ajuste de rotina </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho4_ajustes" class="form-control" style="height:auto">
                                                                    {{ $challenge->atalho4_ajustes }}
</textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Ritual do bom dia </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho4_ritual_dia" class="form-control" style="height:auto">
                                                                                {{ $challenge->atalho4_ritual_dia }}

            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Ajuste de ambiente </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho4_ambienete" class="form-control" style="height:auto">
                                                                                           {{ $challenge->atalho4_ambienete }}

            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Rotina Alimentar</h3>
            </div>
            <div class="card-body">
                <textarea name="atalho4_rotina_alimentar" class="form-control" style="height:auto">
                                                                                                    {{ $challenge->atalho4_rotina_alimentar }}

            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Rotina de sonecas </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho4_rotina_soneca" class="form-control" style="height:auto">
                                                                                                              {{ $challenge->atalho4_rotina_soneca }}

            </textarea>
            </div>
            <div class="card-header">
                <h3 class="card-title ">Ritual noturno </h3>
            </div>
            <div class="card-body">
                <textarea name="atalho4_ritual_noturno" class="form-control" style="height:auto">
                                                                                                                        {{ $challenge->atalho4_ritual_noturno }}

            </textarea>
            </div>

        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Atalho 5 - Descartar Associações</h3>
            </div>
            <div class="card-body">
                <textarea name="atalho5" class="form-control" style="height:auto">
                                                                                                                                    {{ $challenge->atalho5 }}

            </textarea>
            </div>



        </div>
        <div class="card card-info">
            <div class="card-header">
                <h3 class="card-title">Atalho 6 - Aguardar</h3>
            </div>
            <div class="card-body">
                <textarea name="atalho6" class="form-control" style="height:auto">
                                                                                                                                    {{ $challenge->atalho6 }}


            </textarea>
            </div>
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
@section('js')
    <script>
        $(document).ready(function() {
            $(".form-control").overlayScrollbars({

                textarea: {
                    dynHeight: true,

                }

            });
        });
    </script>
@stop

@endsection
