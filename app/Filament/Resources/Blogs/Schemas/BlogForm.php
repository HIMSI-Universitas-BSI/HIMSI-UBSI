<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Models\Branch;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('branch_id')
                    ->required()
                    ->label('Cabang')
                    ->options(Branch::all()->pluck('name', 'id'))
                    ->columnSpanFull(),
                TextInput::make('title')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('banner')
                    ->required()
                    ->disk('public')
                    ->image()
                    ->directory('blog_banner')
                    ->columnSpanFull(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull(),
                Textarea::make('quotes')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->image()
                    ->multiple()
                    ->directory('blog_image')
                    ->required()
                    ->columnSpanFull(),
                DatePicker::make('created_at')
                    ->label('Date')
                    ->required(),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}
