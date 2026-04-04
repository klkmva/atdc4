<form method="post" action="/forgot-password">
    <flux:field>
        <flux:label>Email</flux:label>
        <flux:input type="email" wire:model="email" />
        <flux:error name="email" />
        <flux:description>Votre adresse mail de connexion</flux:description>
    </flux:field>
</form>