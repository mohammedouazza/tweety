<ul>
    <li>
        <a href="{{ route('home') }}" class="font-bold text-lg mb-4 block">Home</a>
    </li>
    <li>
        <a href="{{ route('explore') }}" class="font-bold text-lg mb-4 block">Explore</a>
    </li>
    <li>
        <a href="{{ auth()->user()->path() }}" class="font-bold text-lg mb-4 block">Profile</a>
    </li>
    <li>
        <form action="/logout" method="POST">
            @csrf

            <button type="submit" class="font-bold text-lg mb-4 block"> Logout</button>
        </form>
    </li>
</ul>
