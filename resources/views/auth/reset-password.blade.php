<form method="post" action="/reset-password">
    <flux:field>
        <flux:label>Email</flux:label>
        <flux:input type="email" wire:model="email" />
        <flux:error name="email" />
        <flux:description>Votre adresse mail de connexion</flux:description>
    </flux:field>
    <flux:field>
        <flux:label>Nouveau mot de passe</flux:label>
        <flux:input type="password" wire:model="password" />
        <flux:error name="password" />
        <flux:description>Au moins 8 caractères avec au moins 1 majuscule et 1 chiffre</flux:description>
    </flux:field>
    <flux:field>
        <flux:label>Confirmation du mot de passe</flux:label>
        <flux:input type="password" wire:model="password_confirmation" />
        <flux:error name="password_confirmation" />
        <flux:description>Doit être égal au mot de passe ci-dessus</flux:description>
    </flux:field>
</form>