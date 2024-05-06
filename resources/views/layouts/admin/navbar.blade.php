<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
    <span class="sr-only">Open sidebar</span>
    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
    </svg>
</button>

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
        <a href="{{ route('admin.index') }}" class="flex items-center ps-2.5 mb-5">
            <img src="#" class="h-6 me-3 sm:h-7" alt="logo" />
            <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">{{ config('app.name', 'Laravel') }}</span>
        </a>
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fas fa-th-large mr-2"></i>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.menu.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fas fa-utensils mr-2"></i>Meny</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.menu.category.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fa-solid fa-list mr-2"></i>Kategorier</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fa-solid fa-gear mr-2"></i>Inställningar</span>
                </a>
            </li>
        </ul>
        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
            <li>
                <a href="{{ route('profile.edit') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fas fa-user mr-2"></i>Profil</span>
                </a>
            </li>
            <li>
                <span class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="whitespace-nowrap p-0" type="submit"><i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Logga ut</button>
                    </form>
                </span>
            </li>
        </ul>
    </div>
</aside>
