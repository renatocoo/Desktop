<div>
    <h2>Formulário de Anotações</h2>
    <form wire:submit.prevent="saveNote">
        <div class="form-group">
            <label for="note">Digite sua anotação:</label>
            <input type="text" wire:model="note" class="form-control" placeholder="Sua anotação">
        </div>
        <button type="submit" class="btn btn-primary">Salvar Anotação</button>
    </form>

    <h3>Anotações Salvas</h3>
    <ul>
        @foreach($savedNotes as $savedNote)
            <li>{{ $savedNote }}</li>
        @endforeach
    </ul>
</div>
