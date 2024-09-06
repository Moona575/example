
<x-data="{ open: false } class="bg-white border-b border-gray-100" style="background-color: #4682B4; border-top-left-radius: 15px; border-bottom-left-radius: 15px; margin-top: 20px; margin-left: 180px; margin-right: 0;">

<style>
.dropdown-menu {
    display: none;
    position: absolute;
    right: 0;
    top: 60%;
    background-color: #fff;
    border: 1px solid #ddd;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    z-index: 1000;
}

[x-data]:hover .dropdown-menu {
    display: block;
}

.dropdown-link {
    display: block;
    padding: 5px 8px;
    color: #333;
    text-decoration: none;
    border-bottom: 1px solid #ddd;
}

.dropdown-link:last-child {
    border-bottom: none;
    }

.dropdown-link:hover {
    background-color: #f0f0f0;
}


/* Logout Button Styles */
.logout-button {
    display: block;
    padding: 10px 15px;
    color: #f44336; /* Red color for logout */
    text-decoration: none;
    font-weight: bold;
    border-top: 1px solid #ddd;
    max-width:200px;
}

.logout-button:hover {
    background-color: #fce4e4; /* Light red background on hover */
}
</style>
    <!-- Primary Navigation Menu -->
    <div class="container d-flex justify-content-between align-items-center" style="max-width: none; width: 100%; margin-left: auto; border-radius: 10px;">
        </div>

        <!-- Settings Dropdown -->
<div class="hidden sm:flex sm:items-center sm:ml-6">
    <x-dropdown align="right" width="48">
        <x-slot name="trigger">
            <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                <div>{{ Auth::user()->name }}</div>
                <div class="ml-1">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </div>
            </button>
        </x-slot>

        <x-slot name="content">
            <!-- Authentication -->
            <div class="dropdown-user-info">
                <div class="user-name">{{ Auth::user()->name }}</div>
                <div class="user-email">{{ Auth::user()->email }}</div>
            </div>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                        class="logout-button">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
        </x-slot>
    </x-dropdown>
</div>
