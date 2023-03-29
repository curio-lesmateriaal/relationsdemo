<div wire:click="toggle()" style="font-size: 24px; display: flex; align-items: center; justify-content: flex-end;">
    @if($list->public)
        publiek
    @else
        privé
    @endif
</div>
