<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-cover bg-center min-h-screen">
        <!-- Layout -->
        <div class="flex h-screen">
            <livewire:BackAdminSidebar />

            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-semibold text-[#304dd0]">
                        <strong>User List</strong>
                    </h1>

                    <a href="/Admin-user-form"
                        class="bg-[#f1a839] hover:bg-[#f17339] text-white px-4 py-2 rounded inline-block">
                        Back
                    </a>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md space-y-4">

                    @if (session()->has('success'))
                        <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition
                            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative">
                            {{ session('success') }}
                        </div>
                    @endif


                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200 border border-gray-300 rounded-md">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">No</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Image</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Nama</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Username</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold text-gray-700">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @forelse ($users as $index => $user)
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $index + 1 }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800"><img
                                                src="{{ asset('storage/' . $user->image) }}" alt="{{ $user->name }}"
                                                class="w-30 h-30 object-cover rounded-md">
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $user->name }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800">{{ $user->username }}</td>
                                        <td class="px-6 py-4 text-sm text-gray-800 space-x-2">
                                            <a href="{{ route('user.edit', $user->id) }}"
                                                class="px-3 py-1 bg-blue-500 text-white rounded hover:bg-blue-600 text-xs">Edit</a>
                                            <button
                                                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 text-xs">Delete</button>
                                            <button
                                                class="px-3 py-1 bg-green-500 text-white rounded hover:bg-green-600 text-xs">Change
                                                Password</button>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 text-center text-sm text-gray-500">Tidak ada
                                            data pengguna.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>


                </div>
            </main>

        </div>
    </section>
</div>
