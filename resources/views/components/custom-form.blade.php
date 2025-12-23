<div>
    <form wire:submit="submit">
        {{ $this->form }}
        <button type="submit">submit</button>
    </form>
    {{ json_encode($data) }}
    <x-filament-actions::modals />
</div>