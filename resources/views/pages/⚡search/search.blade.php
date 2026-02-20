<div class="w-full flex justify-center">
    <x-card size="w-[40rem]" margin="2">
        <div class="flex flex-row justify-center w-full sticky top-0 p-1">
            <flux:radio.group variant="segmented">
                <flux:radio x-ref="btn_conf" @click="$refs.search_interv.classList.replace('flex', 'hidden!');$refs.search_conf.classList.replace('hidden!', 'flex');" label="Une conférence" title="Rechercher les conférences contenant une expression" checked />
                <flux:radio x-ref="btn_interv" @click="$refs.search_conf.classList.replace('flex', 'hidden!');$refs.search_interv.classList.replace('hidden!', 'flex');" label="Un conférencier" title="Rechercher les conférences données par un conférencier" />
            </flux:radio.group>
        </div>
        <div x-ref="search_conf" class="flex flex-row justify-center items-center w-full sticky top-0 p-3 gap-3">
            <flux:label>Expression à rechercher</flux:label>
            <flux:input
                wire:model="query"
                type="text"
                description:trailing="Saisissez les mots à rechercher dans le titre, le sous-titre ou la description de la conférence. Vous pouvez utilisez le caractère générique * à la fin d'un mot."
                class="w-[20rem]" />
            <flux:button class="mt-3" variant="primary" color="amber">Rechercher</flux:button>
        </div>
        <div x-ref="search_interv" class="hidden! flex-row justify-center w-full sticky top-0 p-3">
            <flux:input
                wire:model="query"
                type="text"
                label:aside="Nom et/ou prénom du conférencier"
                description:trailing="Saisissez le(s) nom(s) et/ou le(s) prénoms à rechercher. Vous pouvez utilisez le caractère générique * à la fin d'un mot."
                class="w-[20rem]" />
            <flux:button class="mt-3" variant="primary" color="amber">Rechercher</flux:button>
        </div>
    </x-card>
</div>