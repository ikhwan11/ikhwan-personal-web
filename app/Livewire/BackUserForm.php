<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class BackUserForm extends Component
{
    use WithFileUploads;

    public $image;
    public $oldImage;
    public $name;
    public $about_user;
    public $username;
    public $slug;
    public $password;

    public $userId;

    public function mount($user = null)
{
    if ($user) {
        $user = User::where('slug', $user)->firstOrFail();
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->slug = $user->slug;
        $this->about_user = $user->about_user;
        $this->username = $user->username;
        $this->oldImage = $user->image;
    }
}



    #[Title('User Page')]
    public function render()
    {
        return view('livewire.back-end.user.back-user-form');
    }

    // ___ UNTUK Auto slug _______________

        public function updatedName($value)
    {
        $slug = $this->generateSlugWithTerbilang($value);
        $this->slug = $slug;
    }

    private function generateSlugWithTerbilang($str)
    {
        $str = strtolower($str);
        $str = str_replace(',', ' koma ', $str);

        // Ganti angka dengan kata
        $str = preg_replace_callback('/\d+/', function ($matches) {
            return $this->terbilang((int) $matches[0]);
        }, $str);

        // Bersihkan karakter khusus dan buat slug
        $str = preg_replace('/[^\w\s-]/', '', $str);
        $str = preg_replace('/\s+/', '-', trim($str));
        $str = preg_replace('/-+/', '-', $str);

        return $str;
    }

    private function terbilang($num)
    {
        $satuan = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];

        if ($num < 12) return $satuan[$num];
        if ($num < 20) return $this->terbilang($num - 10) . ' belas';
        if ($num < 100) return $this->terbilang(floor($num / 10)) . ' puluh ' . $this->terbilang($num % 10);
        if ($num < 200) return 'seratus ' . $this->terbilang($num - 100);
        if ($num < 1000) return $this->terbilang(floor($num / 100)) . ' ratus ' . $this->terbilang($num % 100);
        if ($num < 2000) return 'seribu ' . $this->terbilang($num - 1000);
        if ($num < 1000000) return $this->terbilang(floor($num / 1000)) . ' ribu ' . $this->terbilang($num % 1000);
        if ($num < 1000000000) return $this->terbilang(floor($num / 1000000)) . ' juta ' . $this->terbilang($num % 1000000);

        return '';
    }

     // ___ UNTUK Auto slug end _______________

    public function saveUser()
    {
        $this->validate([
            'image' => $this->userId ? 'nullable|image|max:2048' : 'required|image|max:2048',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:users,slug,' . $this->userId,
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
                'slug' => $this->slug,
                'about_user' => $this->about_user,
                'username' => $this->username,
                'password' => $this->password ? Hash::make($this->password) : $user->password,
                'image' => $imagePath ?? $user->image,
            ]);
            session()->flash('success', 'User berhasil diperbarui.');
        } else {
            User::create([
                'name' => $this->name,
                'slug' => $this->slug,
                'about_user' => $this->about_user,
                'username' => $this->username,
                'password' => Hash::make($this->password),
                'image' => $imagePath,
            ]);
            session()->flash('success', 'User berhasil ditambahkan.');
        }

        $this->reset(['image', 'oldImage', 'name', 'about_user', 'username', 'password', 'userId', 'slug']);
        return redirect()->to('/Admin-user-list');

    }

}
