<?php

namespace App\Filament\Pages\Auth;

use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;
use Filament\Forms\Components\Hidden;
use Filament\Schemas\Components\Component;
use Filament\Pages\Concerns\HasSubNavigation;
use Filament\Auth\Pages\Register as CustomRegister;

class RegisterCustom extends CustomRegister
{   
    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                $this->getNameFormComponent(),
                $this->getEmailFormComponent(),
                $this->getPasswordFormComponent(),
                $this->getPasswordConfirmationFormComponent(),
                $this->getRolesFormComponent(),
            ]);
    }
    
    protected function getRolesFormComponent(): Component
    {
        return Hidden::make('roles')
            ->default(3);
    }
}
