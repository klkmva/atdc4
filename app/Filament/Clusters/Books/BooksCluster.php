<?php

namespace App\Filament\Clusters\Books;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Pages\Enums\SubNavigationPosition;

class BooksCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = 'phosphor-books-bold';
    protected static ?string $navigationLabel = 'Ouvrages';
    protected static ?string $clusterBreadcrumb = 'ouvrages';
    protected static ?SubNavigationPosition $subNavigationPosition = SubNavigationPosition::Top;
    protected static ?int $navigationSort = 2;
}
