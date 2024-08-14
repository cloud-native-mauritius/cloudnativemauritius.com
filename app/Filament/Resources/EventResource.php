<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Support\Markdown;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Date;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('type')
                    ->label('Event Type')
                    ->options([
                        'meetup' => 'Meetup',
                        'workshop' => 'Workshop',
                        'presentation' => 'Presentation',
                        'panel discussion' => 'Panel Discussion',
                        'talk' => 'Talk',
                        'conference' => 'Conference',
                        'webinar' => 'Webinar',
                    ])
                    ->required(),
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                TextInput::make('location')
                    ->label('Location')
                    ->required(),
                TextInput::make('google_map_url')
                    ->label('Google Map'),
                MarkdownEditor::make('note')
                    ->label('Note')
                    ->nullable(),
                TextInput::make('cncf_url')
                    ->label('CNCF URL')
                    ->nullable(),
                DatePicker::make('start_date')
                    ->label('Start Date')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title'),
                TextColumn::make('Type')
                    ->label('Event Type'),
            ])
            ->filters([
                //
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'view' => Pages\ViewEvent::route('/{record}'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
