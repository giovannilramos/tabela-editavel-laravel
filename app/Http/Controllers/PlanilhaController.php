<?php

namespace App\Http\Controllers;

use App\Models\Abertura_chamado;
use App\Models\Checklist_install;
use App\Models\Checklist_manutencao;
use App\Models\Cliente;
use App\Models\Condicao_final;
use App\Models\Contador_collor;
use App\Models\Contador_peb;
use App\Models\Descricao_defeito_reclamado;
use App\Models\Deslocamento;
use App\Models\Despesas;
use App\Models\Equipamento;
use App\Models\Pecas;
use App\Models\Sar;
use App\Models\Scalt;
use App\Models\Tecnico;
use App\Models\Tempo_trabalho;
use App\Models\Tipo_atendimento;
use App\Models\Trac;
use App\Models\Hora_os;
use Illuminate\Http\Request;
use App\Models\Planilha;
use App\Models\Tipo_scalt;

class PlanilhaController extends Controller
{
    public function index() {
        $planilha = Planilha::all();
        return view('listaPlanilhas', [
            'planilha' => $planilha
        ]);
    }

    public function create() {
        Planilha::create([
            'status' => 0,
        ]);

        $planilha = Planilha::all();
        $tipo_scalt = Tipo_scalt::all();
        return view('create', [
            'planilha' => $planilha,
            'tipo_scalt' => $tipo_scalt,
        ]);
    }

    public function store(Request $request) {
        $abertura_chamado = new Abertura_chamado();
        $checklist_install = new Checklist_install();
        $checklist_manutencao = new Checklist_manutencao();
        $cliente = new Cliente();
        $condicao_final = new Condicao_final();
        $contador_collor = new Contador_collor();
        $contador_peb = new Contador_peb();
        $desc_defeito_reclam = new Descricao_defeito_reclamado();
        $desloc = new Deslocamento();
        $despesas = new Despesas();
        $equipamento = new Equipamento();
        $pecas = new Pecas();
        $sar = new Sar();
        $scalt = new Scalt();
        $tecnico = new Tecnico();
        $tempo_trab = new Tempo_trabalho();
        $tipo_atend = new Tipo_atendimento();
        $trac = new Trac();
        $hora_os = new Hora_os();

        $id_planilha = Planilha::all()->last()->id;

        $codigo_tipo = $request->codigo_tipo;

        $abertura_chamado->empresa = $request->empresa;
        $abertura_chamado->contato = $request->contato;
        $abertura_chamado->depto = $request->depto;
        $abertura_chamado->endereco = $request->endereco;
        $abertura_chamado->cidade = $request->cidade;
        $abertura_chamado->tel = $request->tel;
        $abertura_chamado->bairro = $request->bairro;
        $abertura_chamado->data_atendimento = $request->data_atendimento;
        $abertura_chamado->hr_chegada = $request->hr_chegada;
        $abertura_chamado->id_planilha = $id_planilha;

        $checklist_install->checklist_instalacao = $request->checklist_instalacao;
        $checklist_install->id_planilha = $id_planilha;

        $checklist_manutencao->checklist_manutencao = $request->checklist_manutencao;
        $checklist_manutencao->id_planilha = $id_planilha;

        $condicao_final->condicao_final = $request->condicao_final;
        $condicao_final->id_planilha = $id_planilha;

        $contador_collor->contador_collor = $request->contador_collor;
        $contador_collor->id_planilha = $id_planilha;

        $contador_peb->contador_peb = $request->contador_peb;
        $contador_peb->id_planilha = $id_planilha;

        $desc_defeito_reclam->desc_defeito_reclam = $request->desc_defeito_reclam;
        $desc_defeito_reclam->id_planilha = $id_planilha;

        $desloc->inicial = $request->inicial;
        $desloc->final = $request->final;
        $desloc->t_d = $request->t_d;
        $desloc->id_planilha = $id_planilha;

        $despesas->custo = $request->custo;
        $despesas->km = $request->km;
        $despesas->id_planilha = $id_planilha;

        $equipamento->modelo = $request->modelo;
        $equipamento->numero_serie = $request->numero_serie;
        $equipamento->ativo_fixo = $request->ativo_fixo;
        $equipamento->id_planilha = $id_planilha;

        $pecas->codigo_pecas = $request->codigo_pecas;
        $pecas->descricao_pecas = $request->desc_pecas;
        $pecas->qtd_pecas = $request->qtd_pecas;
        $pecas->condicao_pecas = $request->condicao_pecas;
        $pecas->tipo_pecas = $request->tipo_pecas;
        $pecas->id_planilha = $id_planilha;

        $sar->sar = $request->sar;
        $sar->id_planilha = $id_planilha;

        for ($i = 0; $i < sizeof($codigo_tipo); $i++) {
            Scalt::create([
                'id_tipo' => $codigo_tipo[$i],
                'codigo_problema' => $request->codigo_problema[$i],
                'comentario' => $request->comentario[$i],
                'id_planilha' => $id_planilha,
            ]);
        }

        $tecnico->nome = $request->nome_tecnico;
        $tecnico->assinatura = $request->assinatura_tecnico;
        $tecnico->id_planilha = $id_planilha;

        $tempo_trab->inicio = $request->inicio;
        $tempo_trab->termino = $request->termino;
        $tempo_trab->t_a = $request->t_a;
        $tempo_trab->id_planilha = $id_planilha;

        $tipo_atend->tipo_atendimento = $request->tipo_atendimento;
        $tipo_atend->id_planilha = $id_planilha;

        $trac->trac = $request->trac;
        $trac->id_planilha = $id_planilha;

        $cliente->nome = $request->nome_cliente;
        $cliente->assinatura = $request->assinatura_cliente;
        $cliente->id_planilha = $id_planilha;

        $hora_os->hora = $request->hora;
        $hora_os->os = $request->os;
        $hora_os->id_planilha = $id_planilha;

        $abertura_chamado->save();
        $checklist_install->save();
        $checklist_manutencao->save();
        $cliente->save();
        $condicao_final->save();
        $contador_collor->save();
        $contador_peb->save();
        $desc_defeito_reclam->save();
        $desloc->save();
        $despesas->save();
        $equipamento->save();
        $pecas->save();
        $sar->save();
        $tecnico->save();
        $tempo_trab->save();
        $tipo_atend->save();
        $trac->save();
        $hora_os->save();
        return redirect('/');
    }

    public function show($id) {
        $planilha = Planilha::where('id', $id)->get('id')->first();
        $abertura_chamado = Abertura_chamado::where('id_planilha', $id)->get()->first();
        $checklist_install = Checklist_install::where('id_planilha', $id)->get()->first();
        $checklist_manutencao = Checklist_manutencao::where('id_planilha', $id)->get()->first();
        $cliente = Cliente::where('id_planilha', $id)->get()->first();
        $condicao_final = Condicao_final::where('id_planilha', $id)->get()->first();
        $contador_collor = Contador_collor::where('id_planilha', $id)->get()->first();
        $contador_peb = Contador_peb::where('id_planilha', $id)->get()->first();
        $desc_defeito_reclam = Descricao_defeito_reclamado::where('id_planilha', $id)->get()->first();
        $desloc = Deslocamento::where('id_planilha', $id)->get()->first();
        $despesas = Despesas::where('id_planilha', $id)->get()->first();
        $equipamento = Equipamento::where('id_planilha', $id)->get()->first();
        $pecas = Pecas::where('id_planilha', $id)->get()->first();
        $sar = Sar::where('id_planilha', $id)->get()->first();
        $scalt = Scalt::where('id_planilha', $id)->get();
        $tecnico = Tecnico::where('id_planilha', $id)->get()->first();
        $tempo_trab = Tempo_trabalho::where('id_planilha', $id)->get()->first();
        $tipo_atend = Tipo_atendimento::where('id_planilha', $id)->get()->first();
        $trac = Trac::where('id_planilha', $id)->get()->first();
        $hora_os = Hora_os::where('id_planilha', $id)->get()->first();
        $tipo_scalt = Tipo_scalt::all();

        return view('viewPlanilha', [
            'planilha' => $planilha,
            'abertura_chamado' => $abertura_chamado,
            'checklist_install' => $checklist_install,
            'checklist_manutencao' => $checklist_manutencao,
            'cliente' => $cliente,
            'condicao_final' => $condicao_final,
            'contador_collor' => $contador_collor,
            'contador_peb' => $contador_peb,
            'desc_defeito_reclam' => $desc_defeito_reclam,
            'desloc' => $desloc,
            'despesas' => $despesas,
            'equipamento' => $equipamento,
            'pecas' => $pecas,
            'sar' => $sar,
            'scalt' => $scalt,
            'tecnico' => $tecnico,
            'tempo_trab' => $tempo_trab,
            'tipo_atend' => $tipo_atend,
            'trac' => $trac,
            'hora_os' => $hora_os,
            'tipo_scalt' => $tipo_scalt,
        ]);
    }

    public function edit($id) {
        $planilha = Planilha::where('id', $id)->get()->first();
        $abertura_chamado = Abertura_chamado::where('id_planilha', $id)->get()->first();
        $checklist_install = Checklist_install::where('id_planilha', $id)->get()->first();
        $checklist_manutencao = Checklist_manutencao::where('id_planilha', $id)->get()->first();
        $cliente = Cliente::where('id_planilha', $id)->get()->first();
        $condicao_final = Condicao_final::where('id_planilha', $id)->get()->first();
        $contador_collor = Contador_collor::where('id_planilha', $id)->get()->first();
        $contador_peb = Contador_peb::where('id_planilha', $id)->get()->first();
        $desc_defeito_reclam = Descricao_defeito_reclamado::where('id_planilha', $id)->get()->first();
        $desloc = Deslocamento::where('id_planilha', $id)->get()->first();
        $despesas = Despesas::where('id_planilha', $id)->get()->first();
        $equipamento = Equipamento::where('id_planilha', $id)->get()->first();
        $pecas = Pecas::where('id_planilha', $id)->get()->first();
        $sar = Sar::where('id_planilha', $id)->get()->first();
        $scalt = Scalt::where('id_planilha', $id)->get();
        $tecnico = Tecnico::where('id_planilha', $id)->get()->first();
        $tempo_trab = Tempo_trabalho::where('id_planilha', $id)->get()->first();
        $tipo_atend = Tipo_atendimento::where('id_planilha', $id)->get()->first();
        $trac = Trac::where('id_planilha', $id)->get()->first();
        $hora_os = Hora_os::where('id_planilha', $id)->get()->first();

        $tipo_scalt = Tipo_scalt::all();

        return view('edit', [
            'planilha' => $planilha,
            'abertura_chamado' => $abertura_chamado,
            'checklist_install' => $checklist_install,
            'checklist_manutencao' => $checklist_manutencao,
            'cliente' => $cliente,
            'condicao_final' => $condicao_final,
            'contador_collor' => $contador_collor,
            'contador_peb' => $contador_peb,
            'desc_defeito_reclam' => $desc_defeito_reclam,
            'desloc' => $desloc,
            'despesas' => $despesas,
            'equipamento' => $equipamento,
            'pecas' => $pecas,
            'sar' => $sar,
            'scalt' => $scalt,
            'tecnico' => $tecnico,
            'tempo_trab' => $tempo_trab,
            'tipo_atend' => $tipo_atend,
            'trac' => $trac,
            'hora_os' => $hora_os,
            'tipo_scalt' => $tipo_scalt,
        ]);
    }

    public function update(Request $request, $id) {

        $codigo_tipo = $request->codigo_tipo;

        if(isset($request->save)){
            Planilha::where('id', $id)->update([
                'status' => 0,
            ]);
        } elseif (isset($request->finish)) {
            Planilha::where('id', $id)->update([
                'status' => 1,
            ]);
        }
        if(!(Abertura_chamado::where('id_planilha', $id)->get()->isEmpty())) {
            Abertura_chamado::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'empresa' => $request->empresa,
                'contato' => $request->contato,
                'depto' => $request->depto,
                'endereco' => $request->endereco,
                'cidade' => $request->cidade,
                'tel' => $request->tel,
                'bairro' => $request->bairro,
                'data_atendimento' => $request->data_atendimento,
                'hr_chegada' => $request->hr_chegada,
            ]);
        } else {
            Abertura_chamado::create([
                'id_planilha' => $id,
                'empresa' => $request->empresa,
                'contato' => $request->contato,
                'depto' => $request->depto,
                'endereco' => $request->endereco,
                'cidade' => $request->cidade,
                'tel' => $request->tel,
                'bairro' => $request->bairro,
                'data_atendimento' => $request->data_atendimento,
                'hr_chegada' => $request->hr_chegada,
            ]);
        }
        if(!(Checklist_install::where('id_planilha', $id)->get()->isEmpty())) {
            Checklist_install::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'checklist_instalacao' => $request->checklist_instalacao,
            ]);
        } else {
            Checklist_install::create([
                'id_planilha' => $id,
                'checklist_instalacao' => $request->checklist_instalacao,
            ]);
        }
        if(!(Checklist_manutencao::where('id_planilha', $id)->get()->isEmpty())) {
            Checklist_manutencao::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'checklist_manutencao' => $request->checklist_manutencao,
            ]);
        } else {
            Checklist_manutencao::create([
                'id_planilha' => $id,
                'checklist_manutencao' => $request->checklist_manutencao,
            ]);
        }

        if(!(Cliente::where('id_planilha', $id)->get()->isEmpty())) {
            Cliente::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'nome' => $request->nome_cliente,
                'assinatura' => $request->assinatura_cliente,
            ]);
        } else {
            Cliente::create([
                'id_planilha' => $id,
                'nome' => $request->nome_cliente,
                'assinatura' => $request->assinatura_cliente,
            ]);
        }

        if(!(Condicao_final::where('id_planilha', $id)->get()->isEmpty())) {
            Condicao_final::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'condicao_final' => $request->condicao_final,
            ]);
        } else {
            Condicao_final::create([
                'id_planilha' => $id,
                'condicao_final' => $request->condicao_final,
            ]);
        }
        if(!(Contador_collor::where('id_planilha', $id)->get()->isEmpty())) {
            Contador_collor::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'contador_collor' => $request->contador_collor,
            ]);
        } else {
            Contador_collor::create([
                'id_planilha' => $id,
                'contador_collor' => $request->contador_collor,
            ]);
        }
        if(!(Contador_peb::where('id_planilha', $id)->get()->isEmpty())) {
            Contador_peb::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'contador_peb' => $request->contador_peb,
            ]);
        } else {
            Contador_peb::create([
                'id_planilha' => $id,
                'contador_peb' => $request->contador_peb,
            ]);
        }
        if(!(Descricao_defeito_reclamado::where('id_planilha', $id)->get()->isEmpty())) {
            Descricao_defeito_reclamado::where('id_planilha', $id)->update([
                'desc_defeito_reclam' => $request->desc_defeito_reclam,
                'id_planilha' => $id,
            ]);
        } else {
            Descricao_defeito_reclamado::create([
                'desc_defeito_reclam' => $request->desc_defeito_reclam,
                'id_planilha' => $id,
            ]);
        }
        if(!(Deslocamento::where('id_planilha', $id)->get()->isEmpty())) {
            Deslocamento::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'inicial' => $request->inicial,
                'final' => $request->final,
                't_d' => $request->t_d,
            ]);
        } else {
            Deslocamento::create([
                'id_planilha' => $id,
                'inicial' => $request->inicial,
                'final' => $request->final,
                't_d' => $request->t_d,
            ]);
        }
        if(!(Despesas::where('id_planilha', $id)->get()->isEmpty())) {
            Despesas::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'custo' => $request->custo,
                'km' => $request->km,
            ]);
        } else {
            Despesas::create([
                'id_planilha' => $id,
                'custo' => $request->custo,
                'km' => $request->km,
            ]);
        }
        if(!(Equipamento::where('id_planilha', $id)->get()->isEmpty())) {
            Equipamento::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'modelo' => $request->modelo,
                'numero_serie' => $request->numero_serie,
                'ativo_fixo' => $request->ativo_fixo,
            ]);
        } else {
            Equipamento::create([
                'id_planilha' => $id,
                'modelo' => $request->modelo,
                'numero_serie' => $request->numero_serie,
                'ativo_fixo' => $request->ativo_fixo,
            ]);
        }
        if(!(Pecas::where('id_planilha', $id)->get()->isEmpty())) {
            Pecas::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'codigo_pecas' => $request->codigo_pecas,
                'descricao_pecas' => $request->desc_pecas,
                'qtd_pecas' => $request->qtd_pecas,
                'condicao_pecas' => $request->condicao_pecas,
                'tipo_pecas' => $request->tipo_pecas,
            ]);
        } else {
            Pecas::create([
                'id_planilha' => $id,
                'codigo_pecas' => $request->codigo_pecas,
                'descricao_pecas' => $request->desc_pecas,
                'qtd_pecas' => $request->qtd_pecas,
                'condicao_pecas' => $request->condicao_pecas,
                'tipo_pecas' => $request->tipo_pecas,
            ]);
        }
        if(!(Sar::where('id_planilha', $id)->get()->isEmpty())) {
            Sar::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'sar' => $request->sar,
            ]);
        } else {
            Sar::create([
                'id_planilha' => $id,
                'sar' => $request->sar,
            ]);
        }
        if(!(Scalt::where('id_planilha', $id)->get()->isEmpty())) {
           for ($i = 0; $i < sizeof($codigo_tipo); $i++) {
                Scalt::where('id_planilha', $id)->where('id_tipo', $codigo_tipo[$i])->update([
                    'codigo_problema' => '"'.$request->codigo_problema[$i].'"',
                    'comentario' => '"'.$request->comentario[$i].'"',
                ]);
            }
        } else {
            for ($i = 0; $i < sizeof($codigo_tipo); $i++) {
                Scalt::create([
                    'codigo_problema' => $request->codigo_problema[$i],
                    'comentario' => $request->comentario[$i],
                ]);
            }
        }
        if(!(Tecnico::where('id_planilha', $id)->get()->isEmpty())) {
            Tecnico::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'nome' => $request->nome_tecnico,
                'assinatura' => $request->assinatura_tecnico,
            ]);
        } else {
            Tecnico::create([
                'id_planilha' => $id,
                'nome' => $request->nome_tecnico,
                'assinatura' => $request->assinatura_tecnico,
            ]);
        }
        if(!(Tempo_trabalho::where('id_planilha', $id)->get()->isEmpty())) {
            Tempo_trabalho::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'inicio' => $request->inicio,
                'termino' => $request->termino,
                't_a' => $request->t_a,
            ]);
        } else {
            Tempo_trabalho::create([
                'id_planilha' => $id,
                'inicio' => $request->inicio,
                'termino' => $request->termino,
                't_a' => $request->t_a,
            ]);
        }
        if(!(Tipo_atendimento::where('id_planilha', $id)->get()->isEmpty())) {
            Tipo_atendimento::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'tipo_atendimento' => $request->tipo_atendimento,
            ]);
        } else {
            Tipo_atendimento::create([
                'id_planilha' => $id,
                'tipo_atendimento' => $request->tipo_atendimento,
            ]);
        }
        if(!(Trac::where('id_planilha', $id)->get()->isEmpty())) {
            Trac::where('id_planilha', $id)->update([
                'id_planilha' => $id,
                'trac' => $request->trac,
            ]);
        } else {
            Trac::create([
                'id_planilha' => $id,
                'trac' => $request->trac,
            ]);
        }
        if(!(Hora_os::where('id_planilha', $id)->get()->isEmpty())) {
            Hora_os::where('id_planilha', $id)->update([
                'hora' => $request->hora,
                'os' => $request->os,
                'id_planilha' => $id,
            ]);
        } else {
            Hora_os::create([
                'hora' => $request->hora,
                'os' => $request->os,
                'id_planilha' => $id,
            ]);
        }

        return redirect(route('show', $id));
    }

    public function cancelar($id) {
        Planilha::where('id', $id)->delete();
        return redirect('/');
    }

    public function destroy($id) {
        Planilha::where('id', $id)->delete();
        return redirect('/');
    }
}
