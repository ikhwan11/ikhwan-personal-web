<div>
    <!-- Sidebar -->
    <aside class="w-64 bg-blue-50 shadow-md flex flex-col h-screen">

        <!-- Logo dan Tombol (tidak ada toggle) -->
        <div class="flex items-center justify-between p-4">
            <img src="/assets/img/logo/logo.png" alt="Logo" class="lg:max-w-[150px] max-w-[90px]" />
        </div>

        <!-- Menu Sidebar -->
        <nav class="mt-4 space-y-2 px-4 flex-1">
            <a href="/Admin-blog-form" class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-blog w-5 text-center"></i>
                <span>Blog</span>
            </a>
            <a href="/Admin-about-form" class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-info-circle w-5 text-center"></i>
                <span>About</span>
            </a>

            <a href="/Admin-service-form" class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-concierge-bell w-5 text-center"></i>
                <span>Services</span>
            </a>
            <a href="/Admin-curriculum-form"
                class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-file-alt w-5 text-center"></i>
                <span>Curriculum Vitae</span>
            </a>
            <!-- <a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-box w-5 text-center"></i>
                <span>Products</span>
            </a> -->
            <a href="/Admin-portfolio-form" class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-briefcase w-5 text-center"></i>
                <span>Portfolio</span>
            </a>
            <a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-bullhorn w-5 text-center"></i>
                <span>Ads</span>
            </a>
            <a href="#" class="flex items-center gap-3 p-2 rounded hover:bg-blue-100 text-gray-700">
                <i class="fas fa-address-book w-5 text-center"></i>
                <span>Leads Management</span>
            </a>

            <a href="#" id="userCollapseTrigger"
                class="flex items-center gap-3 p-2 hover:bg-blue-100 text-gray-700 text-sm font-medium rounded ">
                <i class="fas fa-users "></i>
                <span>Users</span>
                <svg class="w-4 h-4 transition-transform" id="chevronIcon" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>

            <!-- Collapsible content -->
            <div id="userCollapseContent" class="mt-2 hidden">
                <div class="bg-blue-100 rounded shadow p-4 space-y-2">
                    <a href="/admin/user/create" class="block text-sm text-gray-700 hover:text-blue-600"><i
                            class="fas fa-user-plus w-4 text-center"></i>&nbsp;&nbsp;&nbsp;Add User</a>
                    <a href="/admin/user/list" class="block text-sm text-gray-700 hover:text-blue-600"><i
                            class="fas fa-list w-4 text-center"></i>&nbsp;&nbsp;&nbsp;User List</a>
                </div>
            </div>

            <a href="/" class="flex items-center gap-3 p-2 mt-4 text-red-500 hover:bg-red-100 rounded">
                <i class="fas fa-sign-out-alt w-5 text-center"></i>
                <span>Logout</span>
            </a>
        </nav>

    </aside>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const trigger = document.getElementById("userCollapseTrigger");
            const content = document.getElementById("userCollapseContent");
            const icon = document.getElementById("chevronIcon");

            trigger.addEventListener("click", (e) => {
                e.preventDefault();
                content.classList.toggle("hidden");

                // Optional: Rotate icon on open
                icon.classList.toggle("rotate-180");
            });
        });
    </script>

</div>
