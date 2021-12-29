@extends('layouts.main')
@section('title', 'Relatório Técnico')
@can('adm')
@section('content')
    <div class="container mt-3">
        <div id="conteudo">
            <a class="btn btn-secondary d-grid col-4 mx-auto mb-3" href="{{route('editar', $planilha->id)}}">Editar relatório</a>
            <table class="tabelaEditavel table">
                <thead>
                <th colspan="1"><img src="" alt="SGQ"></th>
                <th colspan="6" class="text-center">FORDTS - RELATÓRIO DE ATENDIMENTO TÉCNICO</th>
                <th colspan="2">Versão 4.0 <br>FORDTS006 <br>Julho/2012</th>
                </thead>
                <tbody>
                @if(!empty($hora_os))
                            <tr>
                                <td colspan="6" rowspan="2"><img class="logo_ricoh" src="/img/1024px-Ricoh_logo_2005.png"
                                                                    alt="RICOH"></td>
                                <td>Hora:</td>
                                <td><input class="input_campos" type="time" name="hora" id="hora" value="{{$hora_os->hora}}" readonly></td>
                            </tr>
                            <tr>
                                <td>OS:</td>
                                <td><input class="input_campos" type="text" name="os" id="os" value="{{$hora_os->os}}" readonly></td>
                            </tr>
                        @else
                            <tr>
                                <td colspan="6" rowspan="2"><img class="logo_ricoh" src="/img/1024px-Ricoh_logo_2005.png"
                                                                    alt="RICOH"></td>
                                <td>Hora:</td>
                                <td><input class="input_campos" type="time" name="hora" id="hora" readonly></td>
                            </tr>
                            <tr>
                                <td>OS:</td>
                                <td><input class="input_campos" type="text" name="os" id="os" readonly></td>
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
                                <td colspan="4"><input class="input_campos" type="text" name="empresa" id="empresa" value="{{$abertura_chamado->empresa}}" readonly  ></td>
                                <td>CONTATO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="contato" id="contato" value="{{$abertura_chamado->contato}}" readonly  ></td>
                            </tr>
                            <tr>
                                <td>DEPTO/SETOR:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="depto" id="depto" value="{{$abertura_chamado->depto}}" readonly  ></td>
                                <td>TEL:</td>
                                <td colspan="3"><input class="input_campos" type="tel" name="tel" id="tel" value="{{$abertura_chamado->tel}}" readonly  ></td>
                            </tr>
                            <tr>
                                <td>ENDEREÇO:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="endereco" id="endereco" value="{{$abertura_chamado->endereco}}" readonly  ></td>
                                <td>BAIRRO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="bairro" id="bairro" value="{{$abertura_chamado->bairro}}" readonly  ></td>
                            </tr>
                            <tr>
                                <td colspan="1">DATA DO ATENDIMENTO</td>
                                <td colspan="3"><input class="input_campos" type="date" name="data_atendimento"
                                                        id="data_atendimento" value="{{$abertura_chamado->data_atendimento}}" readonly  ></td>
                                <td>H. CHEGADA:</td>
                                <td><input class="input_campos" type="time" name="hr_chegada" id="hr_chegada" value="{{$abertura_chamado->hr_chegada}}" readonly ></td>
                                <td>CIDADE:</td>
                                <td><input class="input_campos" type="text" name="cidade" id="cidade" value="{{$abertura_chamado->cidade}}" readonly ></td>
                            </tr>
                        @else
                        <tr>
                                <td>EMPRESA:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="empresa" id="empresa" readonly></td>
                                <td>CONTATO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="contato" id="contato" readonly></td>
                            </tr>
                            <tr>
                                <td>DEPTO/SETOR:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="depto" id="depto" readonly></td>
                                <td>TEL:</td>
                                <td colspan="3"><input class="input_campos" type="tel" name="tel" id="tel" readonly></td>
                            </tr>
                            <tr>
                                <td>ENDEREÇO:</td>
                                <td colspan="4"><input class="input_campos" type="text" name="endereco" id="endereco" readonly></td>
                                <td>BAIRRO:</td>
                                <td colspan="3"><input class="input_campos" type="text" name="bairro" id="bairro" readonly></td>
                            </tr>
                            <tr>
                                <td colspan="1">DATA DO ATENDIMENTO</td>
                                <td colspan="3"><input class="input_campos" type="date" name="data_atendimento"
                                                        id="data_atendimento" readonly></td>
                                <td>H. CHEGADA:</td>
                                <td><input class="input_campos" type="time" name="hr_chegada" id="hr_chegada" readonly></td>
                                <td>CIDADE:</td>
                                <td><input class="input_campos" type="text" name="cidade" id="cidade" readonly></td>
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
                                        <input class="input_campos" type="text" name="desc_defeito_reclam" id="desc_defeito_reclam" value="{{$desc_defeito_reclam->desc_defeito_reclam}}" readonly >
                                    </td>
                                @else
                                    <td style="height: 10px;" colspan="3">
                                        <input class="input_campos" type="text" name="desc_defeito_reclam" id="desc_defeito_reclam" readonly>
                                    </td>
                                @endif
                                @if(!empty($trac))
                                    <td colspan="2"><input class="input_campos" type="text" name="trac" id="trac" value="{{$trac->trac}}" readonly ></td>
                                @else
                                    <td colspan="2"><input class="input_campos" type="text" name="trac" id="trac" readonly></td>
                                @endif
                                @if(!empty($tipo_atend))
                                    <td colspan="3"><input class="input_campos" type="text" name="tipo_atendimento"
                                                        id="tipo_atendimento" value="{{$tipo_atend->tipo_atendimento}}" readonly ></td>
                                @else
                                    <td colspan="3"><input class="input_campos" type="text" name="tipo_atendimento"
                                                        id="tipo_atendimento" readonly></td>
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
                                <td><input class="input_campos" type="text" name="modelo" id="modelo" value="{{$equipamento->modelo}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="modelo" id="modelo" readonly></td>
                            @endif
                            <td>Inicial:</td>
                            @if(!empty($desloc))
                                <td><input class="input_campos" type="text" name="inicial" id="inicial" value="{{$desloc->inicial}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="inicial" id="inicial" readonly></td>
                            @endif
                            <td>Início:</td>
                            @if(!empty($tempo_trab))
                                <td><input class="input_campos" type="time" name="inicio" id="inicio" value="{{$tempo_trab->inicio}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="time" name="inicio" id="inicio" readonly></td>
                            @endif
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td>Nº Série:</td>
                            @if(!empty($equipamento))
                                <td><input class="input_campos" type="text" name="numero_serie" id="numero_serie" value="{{$equipamento->numero_serie}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="numero_serie" id="numero_serie" readonly></td>
                            @endif
                            <td>Final:</td>
                            @if(!empty($desloc))
                                <td><input class="input_campos" type="text" name="final" id="final" value="{{$desloc->final}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="final" id="final" readonly></td>
                            @endif
                            <td>Término:</td>
                            @if(!empty($tempo_trab))
                                <td><input class="input_campos" type="time" name="termino" id="termino" value="{{$tempo_trab->termino}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="time" name="termino" id="termino" readonly></td>
                            @endif
                            <td>Custo:</td>
                            @if(!empty($despesas))
                            <td>
                                <div style="align-items: center; display: inline-flex; width: 95%;">
                                    R$<input class="input_campos" type="text" name="custo" id="custo" value="{{$despesas->custo}}" readonly >
                                </div>
                            </td>
                            @else
                                <td>
                                    <div style="align-items: center; display: inline-flex; width: 95%;">
                                        R$<input class="input_campos" type="text" name="custo" id="custo" value="0,00" readonly >
                                    </div>
                                </td>
                            @endif
                        </tr>
                        <tr>
                            <td>Ativo fixo:</td>
                            @if(!empty($equipamento))
                                <td><input class="input_campos" type="text" name="ativo_fixo" id="ativo_fixo" value="{{$equipamento->ativo_fixo}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="ativo_fixo" id="ativo_fixo" readonly></td>
                            @endif
                            <td>T.D:</td>
                            @if(!empty($desloc))
                                <td><input class="input_campos" type="text" name="t_d" id="t_d" value="{{$desloc->t_d}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="t_d" id="t_d" readonly></td>
                            @endif
                            <td>T.A:</td>
                            @if(!empty($tempo_trab))
                                <td><input class="input_campos" type="text" name="t_a" id="t_a" value="{{$tempo_trab->t_a}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="t_a" id="t_a" readonly></td>
                            @endif
                            <td>KM:</td>
                            @if(!empty($despesas))
                                <td><input class="input_campos" type="text" name="km" id="km" value="{{$despesas->km}}" readonly ></td>
                            @else
                                <td><input class="input_campos" type="text" name="km" id="km" readonly></td>
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
                                       id="codigo_problema" readonly value="{{$s->codigo_problema}}">
                            </td>
                            <td colspan="3">
                                <input class="input_campos" type="text" name="comentario[]"
                                       id="comentario" readonly value="{{$s->comentario}}">
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
                                        <input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]" value="{{$p}}" readonly>
                                    @endif
                                @endforeach
                            </td>
                            <td class="border_td" colspan="4">
                                @foreach($pecas->descricao_pecas as $p)
                                    @if(!empty($p))
                                        <input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]" value="{{$p}}" readonly>
                                    @endif
                                @endforeach
                            </td>
                            <td class="border_td">
                                @foreach($pecas->qtd_pecas as $p)
                                    @if(!empty($p))
                                        <input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]" value="{{$p}}" readonly>
                                    @endif
                                @endforeach
                            </td>
                            <td class="border_td">
                                @foreach($pecas->condicao_pecas as $p)
                                    @if(!empty($p))
                                        <input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]" value="{{$p}}" readonly>
                                    @endif
                                @endforeach
                            </td>
                            <td class="border_td">
                                @foreach($pecas->tipo_pecas as $p)
                                    @if(!empty($p))
                                        <input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]" value="{{$p}}" readonly>
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
                            value="Instalação elétrica - 110/220 V" onclick="return false;"></td>
                        @else
                            <td colspan="3">Instalação elétrica - 110/220 V</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Instalação elétrica - 110/220 V" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. Sistema Ótico</td>
                            <td><input {{in_array('Limp. Sistema Ótico', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. Sistema Ótico" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. Sistema Ótico</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. Sistema Ótico" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Local é apropriado para instalação</td>
                            <td><input {{in_array('Local é apropriado para instalação',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Local é apropriado para instalação" onclick="return false;"></td>
                        @else
                            <td colspan="3">Local é apropriado para instalação</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Local é apropriado para instalação" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. Externa</td>
                            <td><input {{in_array('Limp. Externa', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. Externa" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. Externa</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. Externa" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Montagem do Gabinete</td>
                            <td><input {{in_array('Montagem do Gabinete',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Montagem do Gabinete" onclick="return false;"></td>
                        @else
                            <td colspan="3">Montagem do Gabinete</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Montagem do Gabinete" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. Reservatório de Toner usado</td>
                            <td><input {{in_array('Limp. Reservatório de Toner usado', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. Reservatório de Toner usado" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. Reservatório de Toner usado</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. Reservatório de Toner usado" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Avarias no equipamento?</td>
                            <td><input {{in_array('Avarias no equipamento?',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Avarias no equipamento?" onclick="return false;"></td>
                        @else
                            <td colspan="3">Avarias no equipamento?</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Avarias no equipamento?" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. do vidro vedação do lazer</td>
                            <td><input {{in_array('Limp. do vidro vedação do lazer', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. do vidro vedação do lazer" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. do vidro vedação do lazer</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. do vidro vedação do lazer" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração de endereço IP</td>
                            <td><input {{in_array('Configuração de endereço IP',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração de endereço IP" onclick="return false;"></td>
                        @else
                            <td colspan="3">Configuração de endereço IP</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração de endereço IP" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. do vidro Exposição</td>
                            <td><input {{in_array('Limp. do vidro Exposição', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. do vidro Exposição" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. do vidro Exposição</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. do vidro Exposição" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração do Gateway</td>
                            <td><input {{in_array('Configuração do Gateway',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração do Gateway" onclick="return false;"></td>
                        @else
                            <td colspan="3">Configuração do Gateway</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração do Gateway" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Verificação da vida útil do Kits Manut.</td>
                            <td><input {{in_array('Verificação da vida útil do Kits Manut.', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Verificação da vida útil do Kits Manut." onclick="return false;"></td>
                        @else
                            <td colspan="3">Verificação da vida útil do Kits Manut.</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Verificação da vida útil do Kits Manut." onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração da Máscara de Rede</td>
                            <td><input {{in_array('Configuração da Máscara de Rede',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração da Máscara de Rede" onclick="return false;"></td>
                        @else
                            <td colspan="3">Configuração da Máscara de Rede</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração da Máscara de Rede" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Verificação do Sistema de Fusão</td>
                            <td><input {{in_array('Verificação do Sistema de Fusão', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Verificação do Sistema de Fusão" onclick="return false;"></td>
                        @else
                            <td colspan="3">Verificação do Sistema de Fusão</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Verificação do Sistema de Fusão" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração de FAX</td>
                            <td><input {{in_array('Configuração de FAX',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração de FAX" onclick="return false;"></td>
                        @else
                            <td colspan="3">Configuração de FAX</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração de FAX" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. dos roletes entrada/Transferência</td>
                            <td><input {{in_array('Limp. dos roletes entrada/Transferência', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. dos roletes entrada/Transferência" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. dos roletes entrada/Transferência</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. dos roletes entrada/Transferência" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Configuração do Scanner</td>
                            <td><input {{in_array('Configuração do Scanner',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração do Scanner" onclick="return false;"></td>
                        @else
                            <td colspan="3">Configuração do Scanner</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Configuração do Scanner" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Verificação dos roletes do ADRF</td>
                            <td><input {{in_array('Verificação dos roletes do ADRF', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Verificação dos roletes do ADRF" onclick="return false;"></td>
                        @else
                            <td colspan="3">Verificação dos roletes do ADRF</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Verificação dos roletes do ADRF" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Testes de cópia / Impressão</td>
                            <td><input {{in_array('Testes de cópia / Impressão',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Testes de cópia / Impressão" onclick="return false;"></td>
                        @else
                            <td colspan="3">Testes de cópia / Impressão</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Testes de cópia / Impressão" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. dos sensores de atolamento do ARDF</td>
                            <td><input {{in_array('Limp. dos sensores de atolamento do ARDF', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. dos sensores de atolamento do ARDF" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. dos sensores de atolamento do ARDF</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. dos sensores de atolamento do ARDF" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Testes de fax</td>
                            <td><input {{in_array('Testes de fax',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Testes de fax" onclick="return false;"></td>
                        @else
                            <td colspan="3">Testes de fax</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Testes de fax" onclick="return false;"></td>
                        @endif
                        @if(!empty($checklist_manutencao->checklist_manutencao))
                            <td colspan="3">Limp. dos Acessórios</td>
                            <td><input {{in_array('Limp. dos Acessórios', $checklist_manutencao->checklist_manutencao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. dos Acessórios" onclick="return false;"></td>
                        @else
                            <td colspan="3">Limp. dos Acessórios</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                            value="Limp. dos Acessórios" onclick="return false;"></td>
                        @endif
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Testes de Scanner / Digitalização</td>
                            <td><input {{in_array('Testes de Scanner / Digitalização',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Testes de Scanner / Digitalização" onclick="return false;"></td>
                        @else
                            <td colspan="3">Testes de Scanner / Digitalização</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Testes de Scanner / Digitalização" onclick="return false;"></td>
                        @endif
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Troca da linguagem para portugês</td>
                            <td><input {{in_array('Troca da linguagem para portugês',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Troca da linguagem para portugês" onclick="return false;"></td>
                        @else
                            <td colspan="3">Troca da linguagem para portugês</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Troca da linguagem para portugês" onclick="return false;"></td>
                        @endif
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Treinamento Operacional</td>
                            <td><input {{in_array('Treinamento Operacional',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Treinamento Operacional" onclick="return false;"></td>
                        @else
                            <td colspan="3">Treinamento Operacional</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Treinamento Operacional" onclick="return false;"></td>
                        @endif
                        <td colspan="3"></td>
                        <td></td>
                    </tr>
                    <tr>
                        @if(!empty($checklist_install->checklist_instalacao))
                            <td colspan="3">Demonstração do Equipamento</td>
                            <td><input {{in_array('Demonstração do Equipamento',$checklist_install->checklist_instalacao) == true ? "checked='checked'" : ""}} class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Demonstração do Equipamento" onclick="return false;"></td>
                        @else
                            <td colspan="3">Demonstração do Equipamento</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                            value="Demonstração do Equipamento" onclick="return false;"></td>
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
                            name="condicao_final" id="condicao_final" value="{{$condicao_final->condicao_final}}" readonly ></td>
                        @else
                            <td style="height: 10px;" colspan="3"><input class="input_campos" type="text"
                            name="condicao_final" id="condicao_final" readonly></td>
                        @endif
                        @if(!empty($tempo_trab))
                            <td colspan="2"><input class="input_campos" type="text" name="contador_peb" id="contador_peb" value="{{$contador_peb->contador_peb}}" readonly>
                            </td>
                        @else
                            <td colspan="2"><input class="input_campos" type="text" name="contador_peb" id="contador_peb" readonly>
                            </td>
                        @endif
                        @if(!empty($tempo_trab))
                            <td colspan="3"><input class="input_campos" type="text" name="contador_collor"
                            id="contador_collor" value="{{$contador_collor->contador_collor}}" readonly></td>
                        @else
                            <td colspan="3"><input class="input_campos" type="text" name="contador_collor"
                            id="contador_collor" readonly></td>
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
                            class="input_campos" readonly>{{$sar->sar}}</textarea></td>
                        @else
                            <td style="height: 100px;" colspan="8"><textarea style="height: 100%; resize: none; padding: 0;"
                            name="sar" id="sar"
                            class="input_campos" readonly></textarea></td>
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
                                    Nome: <input class="input_campos" type="text" name="nome_tecnico" id="nome_tecnico" value="{{$tecnico->nome}}" readonly>
                                @else
                                    Nome: <input class="input_campos" type="text" name="nome_tecnico" id="nome_tecnico" readonly>
                                @endif
                            </div>
                        </td>
                        <td colspan="4">
                            <div class="assinaturas">
                                @if(!empty($cliente))
                                    Nome: <input class="input_campos" type="text" name="nome_cliente" id="nome_cliente" value="{{$cliente->nome}}" readonly>
                                @else
                                    Nome: <input class="input_campos" type="text" name="nome_cliente" id="nome_cliente" readonly>
                                @endif
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <div class="assinaturas">
                                @if(!empty($tecnico))
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_tecnico"
                                    id="assinatura_tecnico" value="{{$tecnico->assinatura}}" readonly>
                                @else
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_tecnico"
                                    id="assinatura_tecnico" readonly>
                                @endif
                            </div>
                        </td>
                        <td colspan="4">
                            <div class="assinaturas">
                                @if(!empty($cliente))
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_cliente"
                                    id="assinatura_cliente" value="{{$cliente->assinatura}}" readonly>
                                @else
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_cliente"
                                    id="assinatura_cliente" readonly>
                                @endif
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button id="button" class="btn btn-danger mb-3" onclick="window.print()">Imprimir</button>
    </div>
@endsection
@endcan
