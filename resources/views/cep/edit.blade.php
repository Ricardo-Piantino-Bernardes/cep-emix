@extends('master')
@section('content')
    <section class="dash_content_app">

        <header class="dash_content_app_header">
            <div class="dash_content_app_header_actions">
                <nav class="dash_content_app_breadcrumb">
                    <ul>

                        <li><a href="{{route('cep.index')}}">CEPs</a></li>
                        <li class="separator icon-angle-right icon-notext"></li>
                        <li><a class="text-orange">Editar CEP</a></li>
                    </ul>
                </nav>

            </div>
        </header>

        <div class="dash_content_app_box">
            {{-- Mensagem de ERROR --}}
            @if($errors->all())
                @foreach($errors->all() as $error)
                    @message(['color' => 'orange'])
                    <p class="icon-asterisk">{{ $error }}</p>
                    @endmessage
                @endforeach
            @endif
            <div class="dash_content_app_box_stage">
                <form class="app_form" action="{{route('cep.show', $cep->id)}}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="label_g2">
                        <label class="label">
                            <span class="legend">*CEP:</span>
                            <input type="tel" name="cep" class="mask-zipcode zip_code_search"
                                   placeholder="Digite o CEP" value="{{ old('cep') ?? $cep->cep }}"/>
                        </label>
                    </div>

                    <label class="label">
                        <span class="legend">*Logradouro:</span>
                        <input type="text" name="logradouro" class="street"
                               placeholder="Logradouro" value="{{ old('logradouro') ?? $cep->logradouro}}"/>
                    </label>

                    <div class="label_g2">

                        <label class="label">
                            <span class="legend">Complemento:</span>
                            <input type="text" name="complemento" placeholder="Completo (Opcional)"
                                   value="{{ old('complemento') ?? $cep->complemento}}"/>
                        </label>

                        <label class="label">
                            <span class="legend">*Bairro:</span>
                            <input type="text" name="bairro" class="neighborhood"
                                   placeholder="Bairro" value="{{ old('bairro') ?? $cep->bairro}}"/>
                        </label>
                    </div>


                    <div class="label_g2">
                        <label class="label">
                            <span class="legend">*Localidade:</span>
                            <input type="text" name="localidade" class="city" placeholder="Localidade"
                                   value="{{ old('localidade') ?? $cep->localidade}}"/>
                        </label>

                        <label class="label">
                            <span class="legend">*UF:</span>
                            <input type="text" name="uf" class="state" placeholder="UF"
                                   value="{{ old('uf') ?? $cep->uf}}"/>
                        </label>
                    </div>

                    <div class="label_g2">
                        <label class="label">
                            <span class="legend">*Unidade:</span>
                            <input type="text" name="unidade" class="" placeholder="Unidade"
                                   value="{{ old('unidade') ?? $cep->unidade}}"/>
                        </label>

                        <label class="label">
                            <span class="legend">*IBGE:</span>
                            <input type="text" name="ibge" class="ibge" placeholder="IBGE"
                                   value="{{ old('ibge') ?? $cep->ibge}}"/>
                        </label>
                    </div>

                    <label class="label">
                        <span class="legend">*GIA:</span>
                        <input type="text" name="gia" class="gia"
                               placeholder="GIA" value="{{ old('gia') ?? $cep->gia}}"/>
                    </label>


                    <div class="text-right mt-2">
                        <button class="btn btn-large btn-green icon-check-square-o" type="submit">Editar CEP
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection