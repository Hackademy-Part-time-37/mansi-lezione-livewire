<div>
    <div class="container d-flex align-items-center gap-3 justify-content-center">
        <button class="btn btn-danger" wire:click="decrement">-</button>
        <span>{{ $counter }}</span>
        <button class="btn btn-success" wire:click="increment">+</button>
        <button class="btn btn-success" wire:click="incrementWithNumber">+ Numero Arbitrario</button>
        <input type="text" value="0" wire:model='number' />
    </div>
    <button class="btn btn-success" wire:click="showHide">Mostra/Nascondi</button>
    @if ($isVisible)
        <span> Ciao </span>
    @endif
</div>
