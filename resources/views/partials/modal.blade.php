<div id="form-modal" class="modal">
    <div class="modal-content">
        <h4>New User</h4>
        <form action="{{route('save_user')}}" method="POST" style="margin-top: 20px;">
        @csrf
        <input name="user_id" hidden>
            <div class="row">
                <div class="input-field col s6">
                    <input id="name" type="text" name="name" class="validate">
                    <label for="name">Name</label>
                </div>
                <div class="input-field col s6">
                    <input id="cpf" type="text" name="cpf" class="validate">
                    <label for="cpf">CPF</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" name="email" class="validate">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn">Save User</button>
                <a href="#!" class="modal-close waves-effect waves-green btn red">Cancel</a>
            </div>
        </form>
    </div>
</div>