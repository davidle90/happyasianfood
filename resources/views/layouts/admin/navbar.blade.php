<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
    <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="{{ route('admin.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fas fa-th-large mr-2"></i>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.menu.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fas fa-utensils mr-2"></i>Menu</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.settings.index')}}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fa-solid fa-gear mr-2"></i>Settings</span>
                </a>
            </li>
            <li>
                <a href="{{ route('profile.edit') }}" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <span class="whitespace-nowrap"><i class="fas fa-user mr-2"></i>Profile</span>
                </a>
            </li>
            <li>
                <span class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 group">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="whitespace-nowrap p-0" type="submit"><i class="fa-solid fa-arrow-right-from-bracket mr-2"></i>Logout</button>
                    </form>
                </span>
            </li>
        </ul>
    </div>
</aside>


