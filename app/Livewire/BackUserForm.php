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
    public $oldImage;
    public $name;
    public $about_user;
    public $username;
    public $password;

    public $userId;

    public function mount($id = null)
    {
        if ($id) {
            $this->userId = $id;
            $user = User::findOrFail($id);

            $this->name = $user->name;
            $this->about_user = $user->about_user;
            $this->username = $user->username;
            $this->oldImage = $user->image; // Untuk preview saat edit
        }
    }

    #[Title('User Page')]
    public function render()
    {
        return view('livewire.back-end.user.back-user-form');
    }

    public function saveUser()
    {
        $this->validate([
            'image' => $this->userId ? 'nullable|image|max:2048' : 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'about_user' => 'nullable|string',
            'username' => 'required|string|unique:users,username,' . $this->userId,
            'password' => $this->userId ? 'nullable|string|min:6' : 'required|string|min:6',
        ]);

        $imagePath = $this->image ? $this->image->store('users', 'public') : null;

        if ($this->userId) {
            $user = User::findOrFail($this->userId);
            if ($this->image && $user->image && \Storage::disk('public')->exists($user->image)) 
            {
            \Storage::disk('public')->delete($user->image);
                }
            $user->update([
                'name' => $this->name,
                'about_user' => $this->about_user,
                'username' => $this->username,
                'password' => $this->password ? Hash::make($this->password) : $user->password,
                'image' => $imagePath ?? $user->image,
            ]);
            session()->flash('success', 'User berhasil diperbarui.');
        } else {
            User::create([
                'name' => $this->name,
                'about_user' => $this->about_user,
                'username' => $this->username,
                'password' => Hash::make($this->password),
                'image' => $imagePath,
            ]);
            session()->flash('success', 'User berhasil ditambahkan.');
        }

        $this->reset(['image', 'oldImage', 'name', 'about_user', 'username', 'password', 'userId']);
        return redirect()->to('/Admin-user-list');

    }
}
