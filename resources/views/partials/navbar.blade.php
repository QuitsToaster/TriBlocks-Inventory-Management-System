<nav class="bg-blue-600 text-white p-4 flex justify-between">
    <h1 class="font-bold">TriBlocks IMS</h1>

    <div class="flex items-center gap-4">
        <span>{{ auth()->user()->name }}</span>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="hover:underline">
                Logout
            </button>
        </form>
    </div>
</nav>