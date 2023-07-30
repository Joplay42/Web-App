<nav class="bg-gray-100 h-20">
    <div class="flex items-center justify-between mt-10 mx-10">
        <h1><span class="font-bold text-blue">Bonjour,</span> {{Auth::user()->name}}</h1>
        <a href="{{route('profile.edit')}}">
            <p class="font-bold">Settings</p>
        </a>
    </div>
</nav>
