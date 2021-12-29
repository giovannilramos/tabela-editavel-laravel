@extends('layouts.main')
@section('title', 'Relatórios')
@can('adm')
@section('content')
    <div class="container mt-3">
        @if(count($planilha) > 0)
            <a href="{{route('store')}}" class="btn btn-primary mt-3">Novo registro</a>
            <div class="container-tabela">
                <h3>Relatórios</h3>
                <div class="scroll" id="table-cont">
                    <table class="table">
                        <thead class="table-dark">
                            <th></th>
                            <th class="text-center">Código</th>
                            <th class="text-center">Status</th>
                            <th>Criado em</th>
                            <th>Atualizado em</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach($planilha as $p)
                                <tr>
                                    <td class="text-center">
                                        <form action="{{route('delete', $p->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></button>
                                        </form>
                                    </td>
                                    <td class="text-center">{{$p->id}}</td>
                                    @if($p->status == 0)
                                        <td style="background-color: #fff3cd; border: 1px solid black" class="alert alert-warning text-center">Em Alteração<a href=""></a></td>
                                    @else
                                        <td style="background-color: green; color: white;" class="text-center">Finalizado</td>
                                    @endif
                                    <td>{{$p->created_at}}</td>
                                    <td>{{$p->updated_at}}</td>
                                    <td class="text-center"><a href="{{route('show', $p->id)}}" class="btn btn-success">Visualizar<ion-icon class="ion_icon" name="eye-outline"></ion-icon></a></td>
                                    @if($p->status == 0)
                                        <td class="text-center"><a href="{{route('editar', $p->id)}}" class="btn btn-secondary">Editar</a></td>
                                    @else
                                        <td></td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <h3>Relatórios</h3>
            <h5 class="alert alert-warning">Nenhum relatório registrado!</h5>
            <a href="{{route('create')}}" class="btn btn-primary">Novo Relatório</a>
        @endif
    </div>
@endsection
@endcan
