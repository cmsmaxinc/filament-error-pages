<?php

namespace Cmsmaxinc\FilamentErrorPages\Filament\Pages;

use Filament\Pages\Page;

class PageNotFoundPage extends Page
{
    public string $code = '404';

    protected static bool $shouldRegisterNavigation = false;

    protected static ?string $slug = '404';

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament-error-pages::error-page';
}
