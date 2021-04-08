@extends('index')
@section('content')
<div class="row" style="margin-top: 3rem;">
    <div class="input-field col s12">
        <a class="btn modal-trigger" href="/user">Novo Usuário</a>
    </div>
    <div class="col m12">
        <table class="striped centered" id="table-user">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>CPF</th>
                    <th>E-mail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @if($users)
                @foreach($users as $user)
                <tr>
                    <td>{!! $user->name !!}</td>
                    <td>{!! $user->cpf !!}</td>
                    <td>{!! $user->email !!}</td>
                    <td>
                        <a class="btn lime darken-1 edit" href="/edit-user/{{$user->id}}">Edit</a>
                        <a class="btn red delete" href="/delete-user/{{$user->id}}">Delete</a>
                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection