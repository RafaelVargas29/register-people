@extends('layouts.main')

@section('title', 'Criar pessoa')

@section('content')
    <div id="body-create">
        <div id="main-form">
            <h1>Insira os dados</h1>
            <form action="/operations/store" method="POST" class="form-area">
                @csrf
                <div class="form-group">
                    <label for="title">Nome:</label><br>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome Da pessoa">
                </div>
                <div class="form-group">
                    <label for="title">Data de nascimento:</label><br>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" placeholder="Data de nascimento">
                </div>
                <div class="form-group">
                    <label for="title">Profissão</label><br>
                    <select name="profession" id="profession" class="form-control">
                        <option value="default">Escolha uma opção</option>
                        <option value="programator">Programador</option>
                        <option value="attendant">Atendente</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Estado Civil:</label><br>
                    <select name="matrialstatus" id="matrialstatus" class="form-control">
                        <option value="default">Escolha uma opção</option>
                        <option value="married" name="married" id="married">Casado</option>
                        <option value="single" name="sigle" id="single">Solteiro</option>
                        <option value="widower" name="widower" id="widower">Viuvo</option>
                    </select>
                </div>
                <!--<div class="form-group">
                    <label for="image">Escolha uma foto</label><br>
                    <input type="file" id="image" name="image" class="form-file">
                </div>
                -->
                <input type="submit" value="Criar pessoa">
            </form>
        </div>
    </div>
@endsection