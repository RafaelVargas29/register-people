@extends('layouts.main')

@section('title', 'Criar pessoa')

@section('content')
    <div id="body-create">
        <div id="main-form">
            <h1>Insira os dados</h1>
            <form action="/operations" method="POST" class="form-area">
                <div class="form-group">
                    <label for="title">Nome:</label><br>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome Da pessoa">
                </div>
                <div class="form-group">
                    <label for="title">Data de nascimento:</label><br>
                    <input type="date" class="form-control" id="datanasc" name="datanasc" placeholder="Data de nascimento">
                </div>
                <div class="form-group">
                    <label for="title">Profissão</label><br>
                    <select name="profession" id="profession" class="form-control">
                        <option value="default">Escolha uma opção</option>
                        <option value="programator">Programador</option>
                        <option value="atenattendant">Atendente</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Estado Civil:</label><br>
                    <select name="matrial-status" id="matrial-status" class="form-control">
                        <option value="default">Escolha uma opção</option>
                        <option value="married">Casado</option>
                        <option value="single">Solteiro</option>
                        <option value="widower">Viuvo</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="image">Escolha uma foto</label><br>
                    <input type="file" id="image" name="image" class="form-file">
                </div>
            </form>
        </div>
    </div>
@endsection