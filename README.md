# PhisingX

```markdown
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

   ```sh
   git clone https://github.com/deadxfire/PhishingX.git
   cd PhishingX
   ```

2. **Run the Installation Script**

   Ensure you have root privileges to run the installation script.

   ```sh
   sudo ./install.sh
   ```

   This script will install the required tools including PHP, jq, figlet, lolcat, and ngrok.

### On Termux

For Termux users, you'll need to install the required packages manually:
If Ngrok is not functioning, please use Cloudflare in Termux as an alternative.

1. **Update Termux Packages**

   ```sh
   pkg update -y
   pkg upgrade -y
   ```

2. **Install Required Packages**

   ```sh
   pkg install php jq figlet gem wget unzip -y
   ```

3. **Install lolcat**

   ```sh
   pkg install gem
   pkg install openssh
   gem install lolcat
   ```

4. **Install ngrok**

   ```sh
   wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-arm.zip
   unzip ngrok-stable-linux-arm.zip
   mv ngrok /data/data/com.termux/files/usr/bin/
   ```

   Make sure to update your PATH if necessary, or place the `ngrok` binary in a directory that is already in your PATH.

## Usage

1. **Run the Phishing Tool**

   ```sh
   ./phishing.sh
   ```

   This will:
   - Clear the terminal screen.
   - Display tool information and options.
   - Prompt you to enter your ngrok auth token.
   - Allow you to select a phishing page.
   - Start a PHP server to serve the selected page.
   - Use ngrok to provide a public URL for accessing the phishing page.
   - Show the ngrok URL and phishing page URL in the terminal.

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

Enter your ngrok auth token: [your_token]
Authtoken saved to configuration file: /home/kali/.ngrok2/ngrok.yml
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

For any questions or issues, please contact [DeadXFire](arindam.makar1@gmail.com).
```

### Explanation:

- **Termux Installation Instructions**: Added specific instructions for installing required packages and tools on Termux.
- **General Installation Instructions**: For Linux systems as previously provided.

This `README.md` should now cover installation instructions for both Linux and Termux environments, providing clear guidance for users.
