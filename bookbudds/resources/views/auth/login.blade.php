<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="min-h-screen flex items-center justify-center bg-zinc-100 dark:bg-zinc-900">
    <div class="bg-white dark:bg-zinc-800 shadow-md rounded-lg flex overflow-hidden max-w-4xl w-full">
        <div class="hidden md:block md:w-1/2 bg-blue-700 p-10">
            <img src="{{ asset('reading.svg') }}" alt="Illustration" class="w-full h-full object-cover">
        </div>
        <div class="w-full md:w-1/2 p-10">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-zinc-800 dark:text-zinc-100">Welcome <span class="text-blue-600">BookBudds!</span></h2>
            </div>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="username" class="sr-only">Username or Email</label>
                    <div class="relative">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-zinc-500 dark:text-zinc-400">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v1a1 1 0 01-2 0V8a8 8 0 0116 0v1a1 1 0 01-2 0V8a6 6 0 00-6-6zm-1 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm-3 0a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm6 0a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"></path></svg>
            </span>
                        <input type="text" id="username" name="email" placeholder="Username or Email" class="pl-10 pr-4 py-2 w-full rounded-md border border-zinc-300 dark:border-zinc-600 bg-zinc-100 dark:bg-zinc-700 text-zinc-800 dark:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-blue-600">
                    </div>
                </div>
                <div class="mb-6">
                    <label for="password" class="sr-only">Password</label>
                    <div class="relative">
            <span class="absolute inset-y-0 left-0 pl-3 flex items-center text-zinc-500 dark:text-zinc-400">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v1a1 1 0 01-2 0V8a8 8 0 0116 0v1a1 1 0 01-2 0V8a6 6 0 00-6-6zm-1 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm-3 0a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm6 0a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"></path></svg>
            </span>
                        <input type="password" id="password" name="password" placeholder="Password" class="pl-10 pr-4 py-2 w-full rounded-md border border-zinc-300 dark:border-zinc-600 bg-zinc-100 dark:bg-zinc-700 text-zinc-800 dark:text-zinc-100 focus:outline-none focus:ring-2 focus:ring-blue-600">
                        <span class="absolute inset-y-0 right-0 pr-3 flex items-center text-zinc-500 dark:text-zinc-400">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20"><path d="M10 2a6 6 0 00-6 6v1a1 1 0 01-2 0V8a8 8 0 0116 0v1a1 1 0 01-2 0V8a6 6 0 00-6-6zm-1 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm-3 0a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm6 0a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z"></path></svg>
            </span>
                    </div>
                </div>
                <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">LOGIN</button>
            </form>
            <div class="text-center mt-4">
                <p class="text-zinc-600 dark:text-zinc-400">Create a new Account? <a href="{{ route('register') }}" class="text-blue-600 hover:underline">Sign Up</a></p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
