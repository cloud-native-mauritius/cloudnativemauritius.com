<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContributionResource\Pages;
use App\Models\Contribution;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ContributionResource extends Resource
{
    protected static ?string $model = Contribution::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),
                Textarea::make('description')
                    ->label('Description')
                    ->required(),
                TextInput::make('author')
                    ->label('Author')
                    ->required(),
                Select::make('type')
                    ->label('Type')
                    ->options([
                        'project' => 'Project',
                        'pr' => 'PR',
                        'issue' => 'Issue',
                    ])
                    ->required(),
                TextInput::make('source')
                    ->label('Source')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Name'),
                TextColumn::make('description')
                    ->label('Description'),
                TextColumn::make('type')
                    ->label('Type'),
                TextColumn::make('author')
                    ->label('Author'),
                TextColumn::make('source')
                    ->label('Source'),
            ])
            ->filters([
                Filter::make('Projects')
                    ->query(fn (Builder $query): Builder => $query->where('type', 'project')),
                Filter::make('PRs')
                    ->query(fn (Builder $query): Builder => $query->where('type', 'pr')),
                Filter::make('Issues')
                    ->query(fn (Builder $query): Builder => $query->where('type', 'issue')),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContributions::route('/'),
            'create' => Pages\CreateContribution::route('/create'),
            'edit' => Pages\EditContribution::route('/{record}/edit'),
        ];
    }
}
