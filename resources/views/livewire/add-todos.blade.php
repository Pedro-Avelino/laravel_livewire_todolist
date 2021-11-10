<div class="flex flex-col items-center mt-4">
    <input type="text" placeholder="Adicionar nova tarefa..." wire:model="item" wire:keydown.enter="addTodo">
    @error('item')
        <span class="text-red-500 mt-2">{{ $message }}</span>
    @enderror
</div>
