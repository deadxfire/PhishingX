# PhishingX

## Overview

**PhishingX** is a Linux-based phishing tool designed for educational purposes only. It allows users to create phishing pages for popular Indian services like Facebook, Instagram, YouTube etc. The tool uses ngrok and cloudflare to tunnel HTTP requests and display a public URL where the phishing page can be accessed. This tool is intended to demonstrate phishing techniques and should not be used for malicious activities.

## Features

- Create phishing pages for Facebook, Instagram, YouTube, etc.
- Use ngrok or CloudFlare to create a public URL for accessing phishing pages.
- Automatically handle ngrok authentication and start a local PHP server.
- Clear terminal screen for a clean user interface.
- Display ngrok or CloudFlare URL and phishing page URL.

## Installation

### On Linux

Follow these steps to install and set up PhishingX on Linux:

1. **Clone the Repository**
```markdown
   ```sh
   git clone https://github.com/deadxfire/PhishingX.git
   cd PhishingX
   ```

2. **Run the Installation Script**

   Ensure you have root privileges to run the installation script.

   ```sh
   chmod +x install.sh
   sudo ./install.sh
   ```

   This script will install the required tools including PHP, jq, figlet, lolcat, and ngrok.

## Usage

1. **Run the Phishing Tool**

   ```sh
   chmod +x PhishingX.sh
   ./PhishingX.sh
   ```

   This will:
   - Display tool information and options.
   - Allow you to select a phishing page.
   - Use Ngrok or Cloudflare to create a public URL for accessing phishing pages.
   - Automatically handle Ngrok authentication and start a local PHP server.
   - Start a PHP server to serve the selected page.
   - Use ngrok or CloudFlare to provide a public URL for accessing the phishing page.
   - Show the URL and phishing page URL in the terminal.

2. **Select a Service**

   - Choose from Facebook, Facebook Security Page, Instagram, or YouTube to start phishing.

3. **Access the Phishing Page**

   After running the script, you will receive a public ngrok URL. Use this URL to access the phishing page.

4. **Stop the Tool**

   To stop the script and terminate the PHP server and ngrok processes, press `Ctrl + C`. The script will clean up and return you to the terminal prompt.

## Example

After running the script, you might see output like this:

```
                    ____  __    _      __    _            _  __
                   / __ \/ /_  (_)____/ /_  (_)___  ____ | |/ /
                  / /_/ / __ \/ / ___/ __ \/ / __ \/ __ `/   / 
                 / ____/ / / / (__  ) / / / / / / / /_/ /   |  
                /_/   /_/ /_/_/____/_/ /_/_/_/ /_/\__, /_/|_|  
                                                 /____/        

Author: DeadXFire
WARNING: This tool is for educational purposes only.
Unauthorized use is illegal and unethical.

Select a service to start phishing:
1. Facebook
2. Facebook Security Page
3. Instagram
4. YouTube
Enter your choice: 
```

## Contributing

If you want to contribute to this project, please fork the repository and create a pull request. Contributions are welcome!

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Disclaimer

This tool is for educational purposes only. The author, DeadXFire, takes no responsibility for any misuse of this tool. Unauthorized use of phishing techniques is illegal and unethical. Use this tool responsibly and with consent.

## Contact

For any questions or issues, please contact [DeadXFire](mailto:arindam.makar1@gmail.com).
```

This `README.md` should now cover installation instructions for Linux environments, providing clear guidance for users. Additional phishing pages will be available soon.
