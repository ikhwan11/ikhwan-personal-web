<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;

class BackUserForm extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $about_user;
    public $username;
    public $password;

    #[Title('User Page')]
    public function render()
    {
        return view('livewire.back-end.user.back-user-form');
    }

    public function saveUser()
    {
        $this->validate([
            'image' => 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'about_user' => 'required|nullable|string',
            'username' => 'required|string|unique:users,username',
            'password' => 'required|string|min:6',
        ]);

        // Simpan gambar ke storage/public/users
        $imagePath = $this->image->store('users', 'public');

        // Simpan user ke database
        User::create([
            'name' => $this->name,
            'about_user' => $this->about_user,
            'username' => $this->username,
            'password' => Hash::make($this->password),
            'image' => $imagePath,
        ]);

        session()->flash('success', 'User berhasil ditambahkan.');

        // Reset input
        $this->reset(['image', 'name', 'about_user', 'username', 'password']);
    }
}
