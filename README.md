# Qontact-HackNY
A HackNY 2018 Project, Winner of Twilio's Best Use of a Static Website 🎉🎖🙌🏼

Here is the [Devpost project](https://devpost.com/software/ook-sharing-contact-info-with-one-click )

## The Problem
When making a new friend, have you found it tedious going to each social media platforms and send a friend request? Or typing all the contact info (website, number, and emails) of your new friend?

We met hundreds of people if not thousands a year, imaging all the time wasted on that contact saving process...

Gotta solve this problem!

## Solution
Qontact is a virtual contact card that enables a user to add a person’s contact information and social media all at once. Qontact runs on a mobile-friendly dynamic website that generates a QR code that contain an individual’s contact information/social media.

![Qcontact](https://github.com/ami-zou/Qontact-HackNY/blob/master/Ook-HackNY/QContact-front%20page.png)

## Our Team
* Front-End Design: Riya. 
* Back-End: Ami Zou
* Generate QR Code: Steven Chan. 
* Product Management: Gillian Pantaleon.

## Development
I worked on the back-end for the web app and database, and ran into many problems:
1. Set up Postgres and Apache; for some reason, localhost and some ports were not running
2. Attempted to use Flask for postgresql & python connection but failed
3. Switched back to PHP but had many errors in compiling the file

In the end, I coded the website using PHP + MySQL. It has one page for the user to input all his/her contact information, choose the fields he/she wants to share, and then generate a QR code.

The next step would be:
1. Create a login page to store user's info
2. Create a mobile app version with multiple pages for the different functionalities
3. Host everything online and be able to generate a contact card page by scanning the QR code
