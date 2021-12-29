@extends('layouts.main')
@section('title', 'Relatório Técnico')
@can('adm')
@section('content')
    <div class="container mt-3">
        <div id="conteudo">
            <table class="tabelaEditavel table">
                <thead>
                    <th colspan="1"><img src="" alt="SGQ"></th>
                    <th colspan="6" class="text-center">FORDTS - RELATÓRIO DE ATENDIMENTO TÉCNICO</th>
                    <th colspan="2">Versão 4.0 <br>FORDTS006 <br>Julho/2012</th>
                </thead>
                <tbody>
                    <form action="{{route('update', $planilha->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        @if(!empty($hora_os))
                            <tr>
                                <td colspan="6" rowspan="2"><img class="logo_ricoh" src="/img/1024px-Ricoh_logo_2005.png"
                                                                    alt="RICOH"></td>
                                <td>Hora:</td>
                                <td><input class="input_campos" type="time" name="hora" id="hora" value="{{$hora_os->hora}}"></td>
                            </tr>
                            <tr>
                                <td>OS:</td>
                                <td><input class="input_campos" type="text" name="os" id="os" value="{{$hora_os->os}}"></td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="6" rowspan="2"><img class="logo_ricoh" src="/img/1024px-Ricoh_logo_2005.png"
                                                                    alt="RICOH"></td>
                                <td>Hora:</td>
                                <td><input class="input_campos" type="time" name="hora" id="hora"></td>
                            </tr>
                            <tr>
                                <td>OS:</td>
                                <td><input class="input_campos" type="text" name="os" id="os"></td>
                            </tr>
                        @endif

                        <tr>
                            <td class="text-center table-dark titulo" colspan="8">
                                ABERTURA DE CHAMADO TÉCNICO
                            </td>
                        </tr>
                        @if(!empty($abertura_chamado))
                            <tr>
                                <td>EMPRESA:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="empresa" id="empresa" value="{{$abertura_chamado->empresa}}"  ></td>
                                <td>CONTATO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="contato" id="contato" value="{{$abertura_chamado->contato}}"  ></td>
                            </tr>
                            <tr>
                                <td>DEPTO/SETOR:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="depto" id="depto" value="{{$abertura_chamado->depto}}"  ></td>
                                <td>TEL:</td>
                                <td colspan="3"><input class="input_campos" type="tel" name="tel" id="tel" value="{{$abertura_chamado->tel}}"  ></td>
                            </tr>
                            <tr>
                                <td>ENDEREÇO:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="endereco" id="endereco" value="{{$abertura_chamado->endereco}}"  ></td>
                                <td>BAIRRO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="bairro" id="bairro" value="{{$abertura_chamado->bairro}}"  ></td>
                            </tr>
                            <tr>
                                <td colspan="1">DATA DO ATENDIMENTO</td>
                                <td colspan="3"><input class="input_campos" type="date" name="data_atendimento"
                                                        id="data_atendimento" value="{{$abertura_chamado->data_atendimento}}"  ></td>
                                <td>H. CHEGADA:</td>
                                <td><input class="input_campos" type="time" name="hr_chegada" id="hr_chegada" value="{{$abertura_chamado->hr_chegada}}" ></td>
                                <td>CIDADE:</td>
                                <td><input class="input_campos" type="text" name="cidade" id="cidade" value="{{$abertura_chamado->cidade}}" ></td>
                            </tr>
                        @else
                        <tr>
                                <td>EMPRESA:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="empresa" id="empresa"></td>
                                <td>CONTATO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="contato" id="contato"></td>
                            </tr>
                            <tr>
                                <td>DEPTO/SETOR:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="depto" id="depto"></td>
                                <td>TEL:</td>
                                <td colspan="3"><input class="input_campos" type="tel" name="tel" id="tel"></td>
                            </tr>
                            <tr>
                                <td>ENDEREÇO:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="endereco" id="endereco"></td>
                                <td>BAIRRO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="bairro" id="bairro"></td>
                            </tr>
                            <tr>
                                <td colspan="1">DATA DO ATENDIMENTO</td>
                                <td colspan="3"><input class="input_campos" type="date" name="data_atendimento"
                                                        id="data_atendimento"></td>
                                <td>H. CHEGADA:</td>
                                <td><input class="input_campos" type="time" name="hr_chegada" id="hr_chegada"></td>
                                <td>CIDADE:</td>
                                <td><input class="input_campos" type="text" name="cidade" id="cidade" ></td>
                            </tr>
                        @endif
                        <tr>
                            <td class="text-center table-dark titulo" colspan="3">
                                DESCRIÇÃO DO DEFEITO RECLAMADO
                            </td>
                            <td class="text-center table-dark titulo" colspan="2">TRAC
                            </td>
                            <td class="text-center table-dark titulo" colspan="3">TIPO
                                DE ATENDIMENTO
                            </td>
                        </tr>
                            <tr>
                                @if(!empty($desc_defeito_reclam))
                                    <td style="height: 10px;" colspan="3">
                                        <input class="input_campos" type="text" name="desc_defeito_reclam" id="desc_defeito_reclam" value="{{$desc_defeito_reclam->desc_defeito_reclam}}" >
                                    </td>
                                @else
                                    <td style="height: 10px;" colspan="3">
                                        <input class="input_campos" type="text" name="desc_defeito_reclam" id="desc_defeito_reclam">
                                    </td>
                                @endif
                                @if(!empty($trac))
                                    <td colspan="2"><input class="input_campos" type="text" name="trac" id="trac" value="{{$trac->trac}}" ></td>
                                @else
                                    <td colspan="2"><input class="input_campos" type="text" name="trac" id="trac"></td>
                                @endif
                                @if(!empty($tipo_atend))
                                    <td colspan="3"><input class="input_campos" type="text" name="tipo_atendimento"
                                                        id="tipo_atendimento" value="{{$tipo_atend->tipo_atendimento}}" ></td>
                                @else
                                    <td colspan="3"><input class="input_campos" type="text" name="tipo_atendimento"
                                                        id="tipo_atendimento"></td>
                                @endif
                            </tr>
                        <tr>
                            <td class="text-center table-dark titulo" colspan="2">
                                EQUIPAMENTO
                            </td>
                            <td class="text-center table-dark titulo" colspan="2">
                                DESLOCAMENTO
                            </td>
                            <td class="text-center table-dark titulo" colspan="2">TEMPO
                                DE TRABALHO
                            </td>
                            <td class="text-center table-dark titulo" colspan="2">
                                DESPESAS R$
                            </td>
                        </tr>
                        <tr>
                            <td>Modelo:</td>
                            @if(!empty($equipamento))
                                <td><input class="input_campos" type="text" name="modelo" id="modelo" value="{{$equipamento->modelo}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="modelo" id="modelo"></td>
                            @endif
                            <td>Inicial:</td>
                            @if(!empty($desloc))
                                <td><input class="input_campos" type="text" name="inicial" id="inicial" value="{{$desloc->inicial}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="inicial" id="inicial"></td>
                            @endif
                            <td>Início:</td>
                            @if(!empty($tempo_trab))
                                <td><input class="input_campos" type="time" name="inicio" id="inicio" value="{{$tempo_trab->inicio}}" ></td>
                            @else
                                <td><input class="input_campos" type="time" name="inicio" id="inicio"></td>
                            @endif
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td>Nº Série:</td>
                            @if(!empty($equipamento))
                                <td><input class="input_campos" type="text" name="numero_serie" id="numero_serie" value="{{$equipamento->numero_serie}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="numero_serie" id="numero_serie"></td>
                            @endif
                            <td>Final:</td>
                            @if(!empty($desloc))
                                <td><input class="input_campos" type="text" name="final" id="final" value="{{$desloc->final}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="final" id="final"></td>
                            @endif
                            <td>Término:</td>
                            @if(!empty($tempo_trab))
                                <td><input class="input_campos" type="time" name="termino" id="termino" value="{{$tempo_trab->termino}}" ></td>
                            @else
                                <td><input class="input_campos" type="time" name="termino" id="termino"></td>
                            @endif
                            <td>Custo:</td>
                            @if(!empty($despesas))
                            <td>
                                <div style="align-items: center; display: inline-flex; width: 95%;">
                                    R$<input class="input_campos" type="text" name="custo" id="custo" value="{{$despesas->custo}}">
                                </div>
                            </td>
                            @else
                                <td>
                                    <div style="align-items: center; display: inline-flex; width: 95%;">
                                        R$<input class="input_campos" type="text" name="custo" id="custo" placeholder="0,00" >
                                    </div>
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <td>Ativo fixo:</td>
                            @if(!empty($equipamento))
                                <td><input class="input_campos" type="text" name="ativo_fixo" id="ativo_fixo" value="{{$equipamento->ativo_fixo}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="ativo_fixo" id="ativo_fixo"></td>
                            @endif
                            <td>T.D:</td>
                            @if(!empty($desloc))
                                <td><input class="input_campos" type="text" name="t_d" id="t_d" value="{{$desloc->t_d}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="t_d" id="t_d"></td>
                            @endif
                            <td>T.A:</td>
                            @if(!empty($tempo_trab))
                                <td><input class="input_campos" type="text" name="t_a" id="t_a" value="{{$tempo_trab->t_a}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="t_a" id="t_a"></td>
                            @endif
                            <td>KM:</td>
                            @if(!empty($despesas))
                                <td><input class="input_campos" type="text" name="km" id="km" value="{{$despesas->km}}" ></td>
                            @else
                                <td><input class="input_campos" type="text" name="km" id="km"></td>
                            @endif
                        </tr>
                        <tr>
                            <td class="text-center table-dark titulo" colspan="2">SCALT
                            </td>
                            <td class="text-center table-dark titulo" colspan="3">
                                CÓDIGO DO PROBLEMA
                            </td>
                            <td class="text-center table-dark titulo" colspan="3">
                                COMENTÁRIO
                            </td>
                        </tr>
                        @foreach($scalt as $s)
                            @php
                                $tipo = $s->find($s->id_tipo)->relTipo->first()
                            @endphp
                            <tr>
                                <input type="hidden" name="codigo_tipo[]" value="{{$tipo->id}}">
                                <td colspan="2">{{$tipo->nomes}}</td>
                                <td colspan="3">
                                    <input class="input_campos" type="text" name="codigo_problema[]"
                                           id="codigo_problema" value="{{$s->codigo_problema}}">
                                </td>
                                <td colspan="3">
                                    <input class="input_campos" type="text" name="comentario[]"
                                           id="comentario" value="{{$s->comentario}}">
                                </td>
                            </tr>
                        @endforeach
                        @if(!empty($pecas))
                            <tr>
                                <td class="text-center table-dark titulo" colspan="8">
                                    PEÇAS/SUPRIMENTOS APLICADOS E PENDÊNCIAS
                                </td>
                            </tr>
                            <tr>
                                <td>CÓDIGO/PART NUMBER</td>
                                <td colspan="4">DESCRIÇÃO</td>
                                <td>QUANT.</td>
                                <td>CONDIÇÃO</td>
                                <td>TIPO DE ENVIO</td>
                            </tr>
                            <tr>
                                <td class="border_td">
                                    @foreach($pecas->codigo_pecas as $p)
                                        @if(!empty($p))
                                            <input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]" value="{{$p}}">
                                        @else
                                            <input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]">
                                        @endif
                                    @endforeach
                                </td>
                                <td class="border_td" colspan="4">
                                    @foreach($pecas->descricao_pecas as $p)
                                        @if(!empty($p))
                                            <input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]" value="{{$p}}" >
                                        @else
                                            <input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                                        @endif
                                    @endforeach
                                </td>
                                <td class="border_td">
                                    @foreach($pecas->qtd_pecas as $p)
                                        @if(!empty($p))
                                            <input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]" value="{{$p}}" >
                                        @else
                                            <input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]">
                                        @endif
                                    @endforeach
                                </td>
                                <td class="border_td">
                                    @foreach($pecas->condicao_pecas as $p)
                                        @if(!empty($p))
                                            <input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]" value="{{$p}}" >
                                        @else
                                            <input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]">
                                        @endif
                                    @endforeach
                                </td>
                                <td class="border_td">
                                    @foreach($pecas->tipo_pecas as $p)
                                        @if(!empty($p))
                                            <input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]" value="{{$p}}" >
                                        @else
                                            <input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]">
                                        @endif
                                    @endforeach
                                </td>
                            </tr>
                        @endif
                        <tr>
                        <td class="text-center table-dark titulo" colspan="4">CHECKLIST DE INSTALAÇÃO
                        </td>
                        <td class="text-center table-dark titulo" colspan="4">
                            MANUTENÇÃO PREVENTIVA
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">PROCEDIMENTO</td>
                        <td class="text-center">REALIZADO</td>
                        <td colspan="3">PROCEDIMENTO</td>
                        <td class="text-center">REALIZADO</td>
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Instalação elétrica - 110/220 V</td>
                            <td><input {{in_array('Instalação elétrica - 110/220 V',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Instalação elétrica - 110/220 V"></td>
                        @else
                            <td colspan="3">Instalação elétrica - 110/220 V</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Instalação elétrica - 110/220 V" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. Sistema Ótico</td>
                            <td><input {{in_array('Limp. Sistema Ótico', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Sistema Ótico" ></td>
                        @else
                            <td colspan="3">Limp. Sistema Ótico</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Sistema Ótico" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Local é apropriado para instalação</td>
                            <td><input {{in_array('Local é apropriado para instalação',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Local é apropriado para instalação" ></td>
                        @else
                            <td colspan="3">Local é apropriado para instalação</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Local é apropriado para instalação" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. Externa</td>
                            <td><input {{in_array('Limp. Externa', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Externa" ></td>
                        @else
                            <td colspan="3">Limp. Externa</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Externa" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Montagem do Gabinete</td>
                            <td><input {{in_array('Montagem do Gabinete',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Montagem do Gabinete" ></td>
                        @else
                            <td colspan="3">Montagem do Gabinete</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Montagem do Gabinete" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. Reservatório de Toner usado</td>
                            <td><input {{in_array('Limp. Reservatório de Toner usado', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Reservatório de Toner usado" ></td>
                        @else
                            <td colspan="3">Limp. Reservatório de Toner usado</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Reservatório de Toner usado" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Avarias no equipamento?</td>
                            <td><input {{in_array('Avarias no equipamento?',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Avarias no equipamento?" ></td>
                        @else
                            <td colspan="3">Avarias no equipamento?</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Avarias no equipamento?" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. do vidro vedação do lazer</td>
                            <td><input {{in_array('Limp. do vidro vedação do lazer', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. do vidro vedação do lazer" ></td>
                        @else
                            <td colspan="3">Limp. do vidro vedação do lazer</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. do vidro vedação do lazer" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração de endereço IP</td>
                            <td><input {{in_array('Configuração de endereço IP',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração de endereço IP" ></td>
                        @else
                            <td colspan="3">Configuração de endereço IP</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração de endereço IP" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. do vidro Exposição</td>
                            <td><input {{in_array('Limp. do vidro Exposição', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. do vidro Exposição" ></td>
                        @else
                            <td colspan="3">Limp. do vidro Exposição</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. do vidro Exposição" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração do Gateway</td>
                            <td><input {{in_array('Configuração do Gateway',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração do Gateway" ></td>
                        @else
                            <td colspan="3">Configuração do Gateway</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração do Gateway" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Verificação da vida útil do Kits Manut.</td>
                            <td><input {{in_array('Verificação da vida útil do Kits Manut.', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação da vida útil do Kits Manut." ></td>
                        @else
                            <td colspan="3">Verificação da vida útil do Kits Manut.</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação da vida útil do Kits Manut." ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração da Máscara de Rede</td>
                            <td><input {{in_array('Configuração da Máscara de Rede',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração da Máscara de Rede" ></td>
                        @else
                            <td colspan="3">Configuração da Máscara de Rede</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração da Máscara de Rede" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Verificação do Sistema de Fusão</td>
                            <td><input {{in_array('Verificação do Sistema de Fusão', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação do Sistema de Fusão" ></td>
                        @else
                            <td colspan="3">Verificação do Sistema de Fusão</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação do Sistema de Fusão" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração de FAX</td>
                            <td><input {{in_array('Configuração de FAX',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração de FAX" ></td>
                        @else
                            <td colspan="3">Configuração de FAX</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração de FAX" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. dos roletes entrada/Transferência</td>
                            <td><input {{in_array('Limp. dos roletes entrada/Transferência', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos roletes entrada/Transferência" ></td>
                        @else
                            <td colspan="3">Limp. dos roletes entrada/Transferência</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos roletes entrada/Transferência" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração do Scanner</td>
                            <td><input {{in_array('Configuração do Scanner',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração do Scanner" ></td>
                        @else
                            <td colspan="3">Configuração do Scanner</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração do Scanner" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Verificação dos roletes do ADRF</td>
                            <td><input {{in_array('Verificação dos roletes do ADRF', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação dos roletes do ADRF" ></td>
                        @else
                            <td colspan="3">Verificação dos roletes do ADRF</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação dos roletes do ADRF" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Testes de cópia / Impressão</td>
                            <td><input {{in_array('Testes de cópia / Impressão',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de cópia / Impressão" ></td>
                        @else
                            <td colspan="3">Testes de cópia / Impressão</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de cópia / Impressão" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. dos sensores de atolamento do ARDF</td>
                            <td><input {{in_array('Limp. dos sensores de atolamento do ARDF', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos sensores de atolamento do ARDF" ></td>
                        @else
                            <td colspan="3">Limp. dos sensores de atolamento do ARDF</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos sensores de atolamento do ARDF" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Testes de fax</td>
                            <td><input {{in_array('Testes de fax',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de fax" ></td>
                        @else
                            <td colspan="3">Testes de fax</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de fax" ></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. dos Acessórios</td>
                            <td><input {{in_array('Limp. dos Acessórios', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos Acessórios" ></td>
                        @else
                            <td colspan="3">Limp. dos Acessórios</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos Acessórios" ></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Testes de Scanner / Digitalização</td>
                            <td><input {{in_array('Testes de Scanner / Digitalização',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de Scanner / Digitalização" ></td>
                        @else
                            <td colspan="3">Testes de Scanner / Digitalização</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de Scanner / Digitalização" ></td>
                        @endif
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Troca da linguagem para portugês</td>
                            <td><input {{in_array('Troca da linguagem para portugês',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Troca da linguagem para portugês" ></td>
                        @else
                            <td colspan="3">Troca da linguagem para portugês</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Troca da linguagem para portugês" ></td>
                        @endif
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Treinamento Operacional</td>
                            <td><input {{in_array('Treinamento Operacional',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Treinamento Operacional" ></td>
                        @else
                            <td colspan="3">Treinamento Operacional</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Treinamento Operacional" ></td>
                        @endif
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Demonstração do Equipamento</td>
                            <td><input {{in_array('Demonstração do Equipamento',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Demonstração do Equipamento"></td>
                        @else
                            <td colspan="3">Demonstração do Equipamento</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Demonstração do Equipamento" ></td>
                        @endif
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="text-center table-dark titulo" colspan="3">CONDIÇÃO FINAL DO EQUIPAMENTO</td>
                        <td class="text-center table-dark titulo" colspan="2">CONTADOR P&B
                        </td>
                        <td class="text-center table-dark titulo" colspan="3">CONTADOR COLLOR</td>
                    </tr>
                    <tr>
                        @if(!empty($tempo_trab))
                            <td style="height: 10px;" colspan="3"><input class="input_campos" type="text"
                            name="condicao_final" id="condicao_final" value="{{$condicao_final->condicao_final}}" ></td>
                        @else
                            <td style="height: 10px;" colspan="3"><input class="input_campos" type="text"
                            name="condicao_final" id="condicao_final"></td>
                        @endif
                        @if(!empty($tempo_trab))
                            <td colspan="2"><input class="input_campos" type="text" name="contador_peb" id="contador_peb" value="{{$contador_peb->contador_peb}}" >
                            </td>
                        @else
                            <td colspan="2"><input class="input_campos" type="text" name="contador_peb" id="contador_peb">
                            </td>
                        @endif
                        @if(!empty($tempo_trab))
                            <td colspan="3"><input class="input_campos" type="text" name="contador_collor"
                            id="contador_collor" value="{{$contador_collor->contador_collor}}" ></td>
                        @else
                            <td colspan="3"><input class="input_campos" type="text" name="contador_collor"
                            id="contador_collor"></td>
                        @endif
                    </tr>
                    <tr>
                        <td class="text-center table-dark titulo" colspan="8">
                            SAR
                        </td>
                    </tr>
                    <tr>
                        @if(!empty($sar))
                            <td style="height: 100px;" colspan="8"><textarea style="height: 100%; resize: none; padding: 0;"
                            name="sar" id="sar"
                            class="input_campos" >{{$sar->sar}}</textarea></td>
                        @else
                            <td style="height: 100px;" colspan="8"><textarea style="height: 100%; resize: none; padding: 0;"
                            name="sar" id="sar"
                            class="input_campos" ></textarea></td>
                        @endif
                    </tr>
                    <tr>
                        <td class="text-center table-dark titulo" colspan="4">TÉCNICO
                        </td>
                        <td class="text-center table-dark titulo" colspan="4">
                            CLIENTE
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="assinaturas">
                                @if(!empty($tecnico))
                                    Nome: <input class="input_campos" type="text" name="nome_tecnico" id="nome_tecnico" value="{{$tecnico->nome}}" >
                                @else
                                    Nome: <input class="input_campos" type="text" name="nome_tecnico" id="nome_tecnico">
                                @endif
                            </div>
                        </td>
                        <td colspan="4">
                            @if(!empty($cliente))
                                <div class="assinaturas">
                                    Nome: <input class="input_campos" type="text" name="nome_cliente" id="nome_cliente" value="{{$cliente->nome}}" >
                                </div>
                            @else
                                Nome: <input class="input_campos" type="text" name="nome_cliente" id="nome_cliente">
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="assinaturas">
                                @if(!empty($tecnico))
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_tecnico"
                                    id="assinatura_tecnico" value="{{$tecnico->assinatura}}" >
                                @else
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_tecnico"
                                    id="assinatura_tecnico">
                                @endif
                            </div>
                        </td>
                        <td colspan="4">
                            <div class="assinaturas">
                                @if(!empty($cliente))
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_cliente"
                                    id="assinatura_cliente" value="{{$cliente->assinatura}}" >
                                @else
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_cliente"
                                    id="assinatura_cliente">
                                @endif
                            </div>
                        </td>
                    </tr>
                        <td style="border: none; padding-left: 0; padding-bottom: 0;"><button id="save" name="save" class="btn btn-success" value="1">Salvar</button></td>
                        @if($planilha->status == 0)
                            <td style="border: none; padding-left: 0; padding-bottom: 0;"><button id="finish" name="finish" value="2" class="btn btn-danger">Finalizar</button></td>
                        @endif
                    </form>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endcan
