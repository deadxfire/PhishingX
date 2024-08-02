#!/bin/bash

# Check if running as root
if [ "$EUID" -ne 0 ]; then
    echo "Please run as root"
    exit
fi

# Update package list
echo "Updating package list..."
apt update -y

# Install PHP
echo "Installing PHP..."
apt install php -y

# Install jq for parsing JSON
echo "Installing jq..."
apt install jq -y

# Install figlet and lolcat
echo "Installing figlet and lolcat..."
apt install figlet lolcat -y

# Install ngrok using the new method
echo "Installing ngrok..."
curl -s https://ngrok-agent.s3.amazonaws.com/ngrok.asc | sudo tee /etc/apt/trusted.gpg.d/ngrok.asc >/dev/null
echo "deb https://ngrok-agent.s3.amazonaws.com buster main" | sudo tee /etc/apt/sources.list.d/ngrok.list
sudo apt update
sudo apt install ngrok -y

# Set executable permissions for the main script
echo "Setting executable permissions..."
chmod +x phishing.sh

echo "Installation complete. You can now run ./phishing.sh to start the tool."
