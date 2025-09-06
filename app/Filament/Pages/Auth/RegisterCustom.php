<?php

namespace App\Filament\Pages\Auth;

use App\Models\User;
use Filament\Schemas\Schema;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
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
            ]);
    }
    
    // Method untuk buat roles default dari spatie
    protected function handleRegistration(array $data): User
    {
        // Buat user baru
        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // Ambil role berdasarkan ID (default 3 / Anggota Muda)
        $role = Role::where('name', 'Anggota Muda')->first();
        if ($role) {
            $user->assignRole($role->name);
        }

        return $user;
    }
}
