@blaze

<div class="flex flex-row gap-10">
    <div class="pb-2 {{ str_ends_with(request()->url(), 'test') ? 'border-b-2 border-b-white' : '' }}"><a href="/">Programme</a class="text-black dark:text-white"></div>
    <div class="pb-2 {{ str_ends_with(request()->url(), 'archives') ? 'border-b-2 border-b-white' : '' }}"><a href="/archives" wire:navigate>Archives</a></div>
    <div class="pb-2 {{ str_ends_with(request()->url(), 'asso') ? 'border-b-2 border-b-white' : '' }}"><a href="/asso" wire:navigate>L'association</a></div>
</div>