<!-- Bouton de sélection du mode sombre/clair -->
<div style="margin-left: 1.5rem" title="Mode sombre/clair">
    <flux:button x-data x-on:click="$flux.dark = ! $flux.dark"
        icon="moon" variant="subtle" aria-label="Toggle dark mode"
        style="height: 24px; width: 24px" x-show="$flux.dark" />
    <flux:button x-data x-on:click="$flux.dark = ! $flux.dark"
        icon="sun" variant="subtle" aria-label="Toggle dark mode"
        style="height: 24px; width: 24px" x-show="!$flux.dark" />
</div>