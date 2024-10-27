<nav>
    <!-- Primary Navigation Menu -->
    <form action="{{ route("logout") }}" method="post">
        @csrf
        <button>Logout</button>
    </form>
</nav>
