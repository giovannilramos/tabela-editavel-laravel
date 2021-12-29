@extends('layouts.main')
@section('title', 'Relatório Técnico')
@can('adm')
@section('content')
    <div class="container mt-3">
        <div id="conteudo">
            <form class="mb-3 text-center" method="POST" action="{{route('cancelar', $planilha->last()->id)}}">
                @csrf
                @method('DELETE')
                <div class="d-grid col-6 mx-auto">
                    <button class="btn btn-danger">Cancelar planilha</button>
                </div>
            </form>
            <table class="tabelaEditavel table">
                <thead>
                <th colspan="1"><img src="" alt="SGQ"></th>
                <th colspan="6" class="text-center">FORDTS - RELATÓRIO DE ATENDIMENTO TÉCNICO</th>
                <th colspan="2">Versão 4.0 <br>FORDTS006 <br>Julho/2012</th>
                </thead>
                <tbody>
                    <form action="{{route('store')}}" method="POST">
                        @csrf
                        <tr>
                            <td colspan="6" rowspan="2"><img class="logo_ricoh" src="img/1024px-Ricoh_logo_2005.png"
                                                             alt="RICOH"></td>
                            <td>Hora:</td>
                            <td><input class="input_campos" type="time" name="hora" id="hora"></td>
                        </tr>
                        <tr>
                            <td>OS:</td>
                            <td><input class="input_campos" type="text" name="os" id="os"></td>
                        </tr>
                        <tr>
                            <td class="text-center table-dark titulo" colspan="8">
                                ABERTURA DE CHAMADO TÉCNICO
                            </td>
                        </tr>
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
                            <td><input class="input_campos" type="text" name="cidade" id="cidade"></td>
                        </tr>
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
                            <td style="height: 10px;" colspan="3"><input class="input_campos" type="text"
                                                                         name="desc_defeito_reclam"
                                                                         id="desc_defeito_reclam"></td>
                            <td colspan="2"><input class="input_campos" type="text" name="trac" id="trac"></td>
                            <td colspan="3"><input class="input_campos" type="text" name="tipo_atendimento"
                                                   id="tipo_atendimento"></td>
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
                            <td><input class="input_campos" type="text" name="modelo" id="modelo"></td>
                            <td>Inicial:</td>
                            <td><input class="input_campos" type="text" name="inicial" id="inicial"></td>
                            <td>Início:</td>
                            <td><input class="input_campos" type="time" name="inicio" id="inicio"></td>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                            <td>Nº Série:</td>
                            <td><input class="input_campos" type="text" name="numero_serie" id="numero_serie"></td>
                            <td>Final:</td>
                            <td><input class="input_campos" type="text" name="final" id="final"></td>
                            <td>Término:</td>
                            <td><input class="input_campos" type="time" name="termino" id="termino"></td>
                            <td>Custo:</td>
                            <td>
                                <div style="align-items: center; display: inline-flex; width: 95%;">
                                    R$<input placeholder="0,00" class="input_campos" type="text" name="custo" id="custo">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Ativo fixo:</td>
                            <td><input class="input_campos" type="text" name="ativo_fixo" id="ativo_fixo"></td>
                            <td>T.D:</td>
                            <td><input class="input_campos" type="text" name="t_d" id="t_d"></td>
                            <td>T.A:</td>
                            <td><input class="input_campos" type="text" name="t_a" id="t_a"></td>
                            <td>KM:</td>
                            <td><input class="input_campos" type="text" name="km" id="km"></td>
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
                        @foreach($tipo_scalt as $tipo)
                            <tr>
                                <input type="hidden" name="codigo_tipo[]" value="{{$tipo->id}}">
                                <td colspan="2">{{$tipo->nomes}}</td>
                                <td colspan="3"><input class="input_campos" type="text" name="codigo_problema[]"
                                                    id="codigo_problema"></td>
                                <td colspan="3"><input class="input_campos" type="text" name="comentario[]"
                                                    id="comentario"></td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="text-center table-dark titulo" colspan="8">
                                PEÇAS/SUPRIMENTOS APLICADOS E PENDÊNCIAS
                            </td>
                        </tr>
                        <tr>
                            <td colspan="8">
                                <label for="pecas" class="form-label">Precisa de peças?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" onclick="dropCampo()" type="radio" name="pecas"
                                           id="pecas1">
                                    <label class="form-check-label" for="pecas1">Sim</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" checked onclick="dropCampo()" type="radio" name="pecas"
                                           id="pecas2">
                                    <label class="form-check-label" for="pecas2">Não</label>
                                </div>
                            </td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc1">
                            <td>CÓDIGO/PART NUMBER</td>
                            <td colspan="4">DESCRIÇÃO</td>
                            <td>QUANT.</td>
                            <td>CONDIÇÃO</td>
                            <td>TIPO DE ENVIO</td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc2">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc3">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc4">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc5">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc6">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc7">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc8">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc9">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc10">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
                        <tr class="pecas_desc" id="pecas_desc11">
                            <td><input class="input_campos" type="text" name="codigo_pecas[]" id="codigo_pecas[]"></td>
                            <td colspan="4"><input class="input_campos" type="text" name="desc_pecas[]" id="desc_pecas[]">
                            </td>
                            <td><input class="input_campos" type="text" name="qtd_pecas[]" id="qtd_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="condicao_pecas[]" id="condicao_pecas[]"></td>
                            <td><input class="input_campos" type="text" name="tipo_pecas[]" id="tipo_pecas[]"></td>
                        </tr>
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
                            <td colspan="3">Instalação elétrica - 110/220 V</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Instalação elétrica - 110/220 V"></td>
                            <td colspan="3">Limp. Sistema Ótico</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Sistema Ótico"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Local é apropriado para instalação</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Local é apropriado para instalação"></td>
                            <td colspan="3">Limp. Externa</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Externa"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Montagem do Gabinete</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Montagem do Gabinete"></td>
                            <td colspan="3">Limp. Reservatório de Toner usado</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. Reservatório de Toner usado"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Avarias no equipamento?</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Avarias no equipamento?"></td>
                            <td colspan="3">Limp. do vidro vedação do lazer</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. do vidro vedação do lazer"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Configuração de endereço IP</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração de endereço IP"></td>
                            <td colspan="3">Limp. do vidro Exposição</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. do vidro Exposição"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Configuração do Gateway</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração do Gateway"></td>
                            <td colspan="3">Verificação da vida útil do Kits Manut.</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação da vida útil do Kits Manut."></td>
                        </tr>
                        <tr>
                            <td colspan="3">Configuração da Máscara de Rede</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração da Máscara de Rede"></td>
                            <td colspan="3">Verificação do Sistema de Fusão</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação do Sistema de Fusão"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Configuração de FAX</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração de FAX"></td>
                            <td colspan="3">Limp. dos roletes entrada/Transferência</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos roletes entrada/Transferência"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Configuração do Scanner</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Configuração do Scanner"></td>
                            <td colspan="3">Verificação dos roletes do ADRF</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Verificação dos roletes do ADRF"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Testes de cópia / Impressão</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de cópia / Impressão"></td>
                            <td colspan="3">Limp. dos sensores de atolamento do ARDF</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos sensores de atolamento do ARDF"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Testes de fax</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de fax"></td>
                            <td colspan="3">Limp. dos Acessórios</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_manutencao[]"
                                       value="Limp. dos Acessórios"></td>
                        </tr>
                        <tr>
                            <td colspan="3">Testes de Scanner / Digitalização</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Testes de Scanner / Digitalização"></td>
                            <td colspan="3"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">Troca da linguagem para portugês</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Troca da linguagem para portugês"></td>
                            <td colspan="3"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">Treinamento Operacional</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Treinamento Operacional"></td>
                            <td colspan="3"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3">Demonstração do Equipamento</td>
                            <td><input class="input_campos" type="checkbox" name="checklist_instalacao[]"
                                       value="Demonstração do Equipamento"></td>
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
                            <td style="height: 10px;" colspan="3"><input class="input_campos" type="text"
                                                                         name="condicao_final" id="condicao_final"></td>
                            <td colspan="2"><input class="input_campos" type="text" name="contador_peb" id="contador_peb">
                            </td>
                            <td colspan="3"><input class="input_campos" type="text" name="contador_collor"
                                                   id="contador_collor"></td>
                        </tr>
                        <tr>
                            <td class="text-center table-dark titulo" colspan="8">
                                SAR
                            </td>
                        </tr>
                        <tr>
                            <td style="height: 100px;" colspan="8"><textarea style="height: 100%; resize: none; padding: 0;"
                                                                             name="sar" id="sar"
                                                                             class="input_campos"></textarea></td>
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
                                    Nome: <input class="input_campos" type="text" name="nome_tecnico" id="nome_tecnico">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="assinaturas">
                                    Nome: <input class="input_campos" type="text" name="nome_cliente" id="nome_cliente">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <div class="assinaturas">
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_tecnico"
                                                       id="assinatura_tecnico">
                                </div>
                            </td>
                            <td colspan="4">
                                <div class="assinaturas">
                                    Assinatura: <input class="input_campos" type="text" name="assinatura_cliente"
                                                       id="assinatura_cliente">
                                </div>
                            </td>
                        </tr>
                        <td style="border: none; padding-left: 0; padding-bottom: 0;"><button class="btn btn-success">Salvar</button></td>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
@endsection
@endcan
