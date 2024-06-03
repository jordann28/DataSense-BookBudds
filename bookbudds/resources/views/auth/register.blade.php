<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="fixed inset-0 flex items-center justify-center bg-zinc-800 bg-opacity-50">
    <div class="bg-white dark:bg-zinc-800 p-8 rounded-lg shadow-lg max-w-md w-full">
        <h2 class="text-2xl font-bold text-center mb-6 text-zinc-900 dark:text-zinc-100">Sign Up to BookBudds</h2>
        <form method="POST" action="{{route('register')}}">
            <div class="mb-4">
                <input type="text" placeholder="Your Name" class="w-full p-3 border rounded-full text-zinc-700 dark:text-zinc-300 dark:bg-zinc-700 dark:border-zinc-600 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div class="mb-4">
                <input type="email" placeholder="Your Email" class="w-full p-3 border rounded-full text-zinc-700 dark:text-zinc-300 dark:bg-zinc-700 dark:border-zinc-600 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <div class="mb-6">
                <input type="password" placeholder="Password" class="w-full p-3 border rounded-full text-zinc-700 dark:text-zinc-300 dark:bg-zinc-700 dark:border-zinc-600 focus:outline-none focus:ring-2 focus:ring-blue-500" />
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-full font-semibold hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Sign Up</button>
        </form>
        <p class="text-center text-zinc-600 dark:text-zinc-400 text-sm mt-4">
            By continuing, you agree with BookBudds's <a href="#" class="underline">Terms of Service</a> & <a href="#" class="underline">Privacy Policy</a>
        </p>
    </div>
</div>
</body>
</html>
