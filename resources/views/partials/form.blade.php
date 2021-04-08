@extends('index')
@section('content')
<div class="row" style="margin-top: 3rem;">
    <h4>Cadastro de Usuário</h4>
    <form id="form-add-user" action="{{route('save_user')}}" method="POST" style="margin-top: 20px;">
        @csrf
        <input name="user_id" hidden value="{{$id}}">
        <div class="row">
            <div class="input-field col s6">
                <input id="name" type="text" name="name" value="{{$name}}" class="validate">
                <label for="name">Name</label>
            </div>
            <div class="input-field col s6">
                <input id="cpf" type="text" name="cpf" value="{{$cpf}}" class="validate">
                <label for="cpf">CPF</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" type="email" name="email" value="{{$email}}" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn">Save User</button>
            <a href="/" class="modal-close waves-effect waves-green btn red">Cancel</a>
        </div>
    </form>
</div>
@endsection