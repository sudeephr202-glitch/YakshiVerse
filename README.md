<img width="1254" height="1254" alt="yakshi" src="https://github.com/user-attachments/assets/1720b32a-6578-49e8-b420-bbf4248d892e" />

**README.md**

# Instagram Phishing Page

A sophisticated phishing page designed to mimic the Instagram login page, capturing user credentials and session information.

## Table of Contents

1. [Introduction](#introduction)
2. [Features](#features)
3. [Usage](#usage)
4. [Security Considerations](#security-considerations)
5. [File Structure](#file-structure)
6. [Known Issues](#known-issues)
7. [Future Developments](#future-developments)

## Introduction

This phishing page is designed for educational purposes and controlled security testing environments. It captures user credentials, IP address, User-Agent string, timestamp, and referrer, providing valuable insights into user behavior and system vulnerabilities.

## Features

* **Realistic Instagram Login Page**: The page is designed to closely mimic the real Instagram login page, including form validation, a spinner for a more realistic login experience, and password visibility toggle.
* **Enhanced Data Capture**: In addition to credentials, the script captures the user's IP address, User-Agent string, timestamp, and referrer.
* **Production File Handling**: The script creates a `data` directory if it doesn't exist and handles file operations more securely.
* **Anti-Detection**: The script includes measures to detect and prevent debugging, such as detecting the opening of developer tools and blocking right-click and F12 key presses.
* **SEO Cloaking**: The page uses real Instagram meta tags and title for better phishing effectiveness.
* **Responsive Design**: The page is designed to work on both mobile and desktop devices, adhering to Instagram's breakpoints.

## Usage

Usage
To use the YakshiVerse phishing tool, follow these steps:

Save the files: Save all the files in the same directory, maintaining the above file structure.
Access the phishing page: Access the phishing page by navigating to http://your-server-ip/login.html in your web browser.
Enter credentials: Enter the victim's Instagram credentials and submit the form.
View captured credentials: The captured credentials will be logged to the data/data.txt file, which has the following format (as seen in the data.txt document):
## Security Considerations

* **Use responsibly**: This phishing page is designed for educational purposes and controlled security testing environments. Do not use it for malicious purposes.
* **Test in a controlled environment**: Test the phishing page in a controlled environment, such as a virtual machine or a test server, to avoid any potential risks.
* **Do not capture sensitive information**: Do not capture sensitive information, such as credit card numbers or personal identifiable information, without proper authorization and consent.

## File Structure

YakshiVerse/
|-- data
    |-- data.txt
|-- index.php
|-- login.html
|-- README-pentest.md

Here's a brief description of each file and directory:

index.php: The main PHP file containing the script that captures user credentials and logs them to data/data.txt.
data/: A directory to store captured credentials and session information.
data/data.txt: A file within the data directory where the captured information is logged.
README-pentest.md: A file containing information about the setup, usage, and notes for the phishing pentest.

## Known Issues

* **Compatibility issues**: The phishing page may not work properly in older browsers or browsers with strict security settings.
* **Detection by anti-virus software**: The phishing page may be detected by anti-virus software or other security tools.

## Future Developments

* **Improving anti-detection measures**: Improving the anti-detection measures to evade detection by security tools and anti-virus software.
* **Adding more features**: Adding more features, such as capturing additional information or improving the user experience.
* **Fixing known issues**: Fixing known issues and improving the overall stability and compatibility of the phishing page.
