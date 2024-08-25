<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers\AuthorsRelationManager;
use App\Models\Post;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                FileUpload::make('cover_image')
                    ->label('Cover Image')
                    ->image()
                    ->nullable(),
                MarkdownEditor::make('content')
                    ->label('Content')
                    ->nullable(),
                TextInput::make('cover_image_caption')
                    ->label('Cover Image Caption')
                    ->nullable(),
                TextInput::make('meta_title')
                    ->label('Meta Title')
                    ->nullable(),
                TextInput::make('meta_description')
                    ->label('Meta Description')
                    ->nullable(),
                FileUpload::make('meta_image')
                    ->label('Meta Image')
                    ->nullable(),
                Select::make('Authors')
                    ->multiple()
                    ->relationship('authors', 'name'),
                Select::make('Categories')
                    ->multiple()
                    ->relationship('categories', 'name'),
                TextInput::make('slug'),
                Toggle::make('is_published')
                    ->label('Publish'),
                DateTimePicker::make('created_at')
                    ->label('Created At')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->searchable(),
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
            // AuthorsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'view' => Pages\ViewPost::route('/{record}'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
