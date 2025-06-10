<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class BackUserList extends Component
{

    protected $listeners = ['deleteUser'];

    public function deleteUser($slug)
    {
        $user = User::where('slug', $slug)->firstOrFail();

        if ($user->image && Storage::disk('public')->exists($user->image)) {
            Storage::disk('public')->delete($user->image);
        }

        $user->delete();

        session()->flash('success', 'User berhasil dihapus.');
    }

    
    #[Title('User Page')]
    public function render()
    {
        $users = User::latest()->get();
        return view('livewire.back-end.user.back-user-list', compact('users'));
    }

}
