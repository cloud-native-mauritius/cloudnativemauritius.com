<?php

namespace App\Filament\Resources\AuthorResource\RelationManagers;

use App\Filament\Resources\SocialMediaResource;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables\Table;

class SocialMediasRelationManager extends RelationManager
{
    protected static string $relationship = 'SocialMedias';

    public function form(Form $form): Form
    {
        return SocialMediaResource::form($form);
    }

    public function table(Table $table): Table
    {
        return SocialMediaResource::table($table);
    }
}
