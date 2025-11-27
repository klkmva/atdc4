<?php

use Carbon\Carbon;
?>
<h1>Liste des contacts de l'association</h1>
<style>
    table {
        break-after: page;
        font-size: 10px;
    }
    th {
        background-color: #f2f2f2;
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Structure</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
        <tr>
            <td>{{ $contact->last_name }}</td>
            <td>{{ $contact->first_name }}</td>
            <td>{{ $contact->email }}</td>
            <td>{{ $contact->phone1 }}
                @if ($contact->phone2)
                    <br>{{ $contact->phone2 }}
                @endif
            </td>
            <td>{{ $contact->company }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<p>Total des contacts : {{ $contacts->count() }}</p>