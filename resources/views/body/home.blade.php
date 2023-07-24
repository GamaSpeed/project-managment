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
                <li><a href="#">Stats</a></li>
            </ul>
        </div>
    </x-slot>

    <div class="card">
        <div class="card-header text-center">
          Home | Project App
        </div>
        <div class="card-body">
          <h5 class="card-title text-center">Welcome to you user</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam perferendis alias vero, enim mollitia dolore adipisci itaque, sed nobis a sit dolores tenetur nisi aut asperiores cumque nemo rerum tempora!</p>
        </div>
    </div>
</x-app-layout>