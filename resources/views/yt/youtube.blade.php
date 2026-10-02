@blaze

@props([
'info'
]);

@foreach ($info as $i)
@switch($i[0])
@case('0')
<p><span class="text-green-500">Données à jour : {{ $i[1] }}</span></p>
@break
@case('1')
<p><span class="text-blue-500">Données mise à jour : {{ $i[1] }}</span></p>
@break
@case('2')
<p><span class="text-blue-500">Erreur de mise à jour : {{ $i[1] }}</span></p>
@break
@case('3')
<p><span class="text-orange-500">Conférence absente de la base de données : {{ $i[1] }}</span></p>
@break
@case('4')
<p><span class="text-orange-500">Date d'enregistrement absente dans la vidéo : {{ $i[1] }}</span></p>
@break
@default
<p><span class="text-red-500">Erreur générale : {{ $i[1] }}</span></p>
@break
@endswitch
@endforeach
