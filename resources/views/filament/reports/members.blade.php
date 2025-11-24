<?php

use Carbon\Carbon;
?>
<h1>Liste des membres à jour de leur cotisation</h1>
<style>
    table {
        break-after: page;
    }
    th {
        background-color: #f2f2f2;
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<?php $count = 0; ?>
<table>
    <thead>
        <tr>
            <th>-</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Souscription</th>
            <th>Échéance</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($members as $member)
        <?php $count++; ?>
        <tr>
            <td>{{ $count }}</td>
            <td>{{ $member->last_name }}</td>
            <td>{{ $member->first_name }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ Carbon::parse($member->date)->format('d/m/Y') }}</td>
            <td>{{ Carbon::parse($member->echeance)->format('d/m/Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>Total des membres à jour de leur cotisation : {{ $members->count() }}</p>