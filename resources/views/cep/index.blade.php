@extends('master')
@section('content')
    <section class="dash_content_app">

        <header class="dash_content_app_header">
            <div class="dash_content_app_header_actions">
                <nav class="dash_content_app_breadcrumb">
                    <ul>

                        <li><a href="{{route('cep.index')}}" class="text-orange">CEPs</a></li>
                    </ul>
                </nav>
                <a href="{{route('cep.create')}}" class="btn btn-orange icon-home ml-1">Cadastrar CEP</a>
            </div>
        </header>

        <div class="dash_content_app_box">
            <div class="nav">

                {{-- Mensagem de ERROR --}}
                @if($errors->all())
                    @foreach($errors->all() as $error)
                        @message(['color' => 'orange'])
                        <p class="icon-asterisk">{{ $error }}</p>
                        @endmessage
                    @endforeach
                @endif

                <div class="dash_content_app_box_stage">
                    <table id="dataTable" class="nowrap stripe" width="100" style="width: 100% !important;">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>CEP</th>
                            <th>Logradouro</th>
                            <th>Bairro</th>
                            <th>Localidade</th>
                            <th>UF</th>
                            <th>Visualisar/Editar</th>
                            <th>Excluir</th>
                        </tr>

                        </thead>
                        <tbody>
                        @foreach($ceps as $cep)
                            <tr>
                                <td>{{$cep->id}}</td>
                                <td class="mask-zipcode">{{$cep->cep}}</td>
                                <td>{{$cep->logradouro}}</td>
                                <td>{{$cep->bairro}}</td>
                                <td>{{$cep->localidade}}</td>
                                <td>{{$cep->uf}}</td>
                                <td>
                                    <a class="icon-eye text-orange" href="{{route('cep.show', $cep->id)}}"></a>
                                    <a class="icon-pencil text-orange" href="{{route('cep.show', $cep->id)}}"></a>
                                </td>
                                <td>
                                    <a class="icon-trash text-orange" href="{{route('cep.destroy', $cep->id)}}"></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
