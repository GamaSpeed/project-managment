<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

        <div class="container">
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="projet">Project</a></li>
                <li><a href="task">Tasks</a></li>
                <li><a href="stats">Stats</a></li>
            </ul>
        </div>
    </x-slot>

    <div class="">
        @yield('content-header')
        @yield('task')

        @yield('projet-header')
        @yield('projet')

        @yield('task-add')

        @yield('add-projet')
        @yield('show-projet')

        @yield('edit-task')

        @yield('show_task')

        @yield('stat-task')
    </div>
</x-app-layout>
