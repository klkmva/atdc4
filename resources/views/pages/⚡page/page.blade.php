@blaze

<div x-data x-on:load.window="$refs.pcontainer.innerHTML=he.decode($refs.pcontent.innerHTML)" class="h-full bg-stone-100 dark:bg-stone-900">
    <div x-ref="pcontent" class="hidden">{{ $content }}</div>
    <div x-ref="pcontainer" class="text-zinc-900 dark:text-zinc-100 bg-zinc-50 dark:bg-zinc-900 border border-zinc-50 dark:border-zinc-800 h-full overflow-y-auto"></div>
</div>