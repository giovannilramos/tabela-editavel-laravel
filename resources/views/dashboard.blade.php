@extends('layouts.main')
@section('title', 'Dashboard')
@can('adm')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Bem vindo(a) a plataforma {{Auth::user()->name}}! Vá para a home <a style="text-decoration: underline;" href="{{route('home')}}">clicando aqui</a> ou no botão Home na barra de navegação!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
@endcan
