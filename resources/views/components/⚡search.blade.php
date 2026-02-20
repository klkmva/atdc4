<?php

use Livewire\Component;

new class extends Component
{
    public $model = null;
    public $search = null;

    public function mount()
    {
        $this->search = request()['search'] ?? '';
        $this->model = request()['model'] ?? '';
    }

    public function render()
    {
        return $this->view();
    }
};
?>

<div class="w-full flex justify-center">
    <x-card size="w-fit" margin="m-0" padding="p-0">
        <div class="flex flex-row justify-center w-full sticky top-0 p-0">
            <flux:radio.group variant="segmented">
                <flux:radio class="text-xs sm:text-base" x-init="if ($wire.model != 'speaker') $el.dispatchEvent(new MouseEvent('click'))" onclick="document.getElementById('search_interv').classList.replace('block', 'hidden');document.getElementById('search_conf').classList.replace('hidden', 'block')" label="Une conférence" title="Rechercher les conférences contenant une expression" />
                <flux:radio class="text-xs sm:text-base" x-init="if ($wire.model == 'speaker') $el.dispatchEvent(new MouseEvent('click'))" onclick="document.getElementById('search_conf').classList.replace('block', 'hidden');document.getElementById('search_interv').classList.replace('hidden', 'block')" label="Un conférencier" title="Rechercher les conférences données par un conférencier" />
            </flux:radio.group>
        </div>
        <div class="block" id="search_conf">
            <form action="/archives/search" class="flex flex-col gap-1.5 p-2">
                <label for="search" class="mt-2 mb-1 text-xs sm:text-base">Expression à rechercher</label>
                <input type="text" required size="15" name="search" class="border border-zinc-300 rounded-xs text-xs sm:text-base w-[15em]" value="{{ $model  == 'event' ? $search : '' }}" /><input type="hidden" name="model" value="event">
                <div class="text-zinc-800 dark:text-zinc-300 text-xs sm:text-base">
                    Saisissez les mots à rechercher dans le titre, le sous-titre ou la description des conférences. Vous pouvez utilisez le caractère générique * à la fin d'un mot.
                </div>
                <button class="mt-3 bg-amber-400 text-zinc-900 border rounded w-40" type="submit">Rechercher</button>
            </form>
        </div>
        <div class="hidden" id="search_interv">
            <form action="/archives/search" class="flex flex-col gap-1.5 p-2">
                <label for="search" class="mt-2 mb-1 text-xs sm:text-base">Expression à rechercher</label>
                <input type="text" required size="15" name="search" class="border border-zinc-300 rounded-xs text-xs sm:text-base" value="{{ $model  == 'speaker' ? $search : '' }}" /><input type="hidden" name="model" value="speaker">
                <div class="text-zinc-800 dark:text-zinc-300 text-xs sm:text-base">
                    Saisissez les mots à rechercher dans le nom ou le prénom des conférenciers. Vous pouvez utilisez le caractère générique * à la fin d'un mot.
                </div>
                <button class="mt-3 bg-amber-400 text-zinc-900 border rounded w-40" type="submit">Rechercher</button>
            </form>
        </div>
    </x-card>
</div>