# Airline Reservation System

## Overview
The EGYPTAIR Flight Reservation System is a web-based application designed to simplify flight booking, user account management, and electronic wallet transactions. It provides an intuitive interface for travelers to search and book flights, manage their wallet, and track bookings. Administrators can manage flights and users, while airlines can integrate the system into their services.

This project was developed as part of a university assignment at Sinai University, Faculty of Information Technology and Computer Science.
## Features
* Search flights by origin, destination, and departure date.

* Display available flights with details (flight number, route, departure time, price).

* Responsive UI using Bootstrap 5, styled with EGYPTAIR's blue and white branding.

* Backend powered by PHP and MySQL for dynamic functionality
## Technologies Used
* Frontend: HTML, CSS, Bootstrap 5, js

* Backend: PHP

* Database: MySQL

* Server: XAMPP (Apache and MySQL)
## Prerequisites
* XAMPP ( version  8.1.25 / PHP 8.1.25  recommended) with Apache and MySQL modules enabled.

* A web browser (e.g., Chrome, Firefox, Microsoft Edge).
## Setup Instructions
### 1. Clone the Repository
Clone this repository to your local machine:
```
git clone https://github.com/rewanesam/airline-reservation-system-project.git
```
### 2. Set Up XAMPP
* Download and install XAMPP from https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.25/xampp-windows-x64-8.1.25-0-VS16-installer.exe.

* Start the Apache and MySQL modules from the XAMPP Control Panel.
### 3. Configure the Project
* Copy the project folder (```airline-reservation-system-project```) to the ```htdocs``` directory in your XAMPP installation (e.g.,``` C:\xampp\htdocs\airline-reservation-system-project```).
### 4. Set Up the Database
* Open phpMyAdmin by navigating to ```http://localhost/phpmyadmin``` in your browser.

* Create a new database named ```airline_db```.

* Run the following SQL to create the ```flights ```table and insert sample data:
```
CREATE TABLE flights (
    id INT AUTO_INCREMENT PRIMARY KEY,
    flight_number VARCHAR(10) NOT NULL,
    origin VARCHAR(50) NOT NULL,
    destination VARCHAR(50) NOT NULL,
    departure_time DATETIME NOT NULL,
    price DECIMAL(10, 2) NOT NULL
);

INSERT INTO flights (flight_number, origin, destination, departure_time, price) VALUES
    ('MS123', 'Cairo', 'London', '2025-05-15 10:00:00', 300.00),
    ('MS456', 'Cairo', 'Dubai', '2025-05-15 14:00:00', 250.00),
    ('MS789', 'London', 'Cairo', '2025-05-16 09:00:00', 320.00);
```
### 5. Run the Application
* Open your browser and navigate to ```http://localhost/airline-reservation-system-project/index.php```.
  
* You should see the Home Page with a flight search form.
## Usage
* Search Flights: Enter the origin (e.g., "Cairo"), destination (e.g., "London"), and optional departure date, then click "Search Flights."

* View Results: Available flights will be displayed as cards with details like flight number, route, departure time, and price.

* Future Features: This is a basic implementation. Future updates may include user authentication, booking functionality, and wallet management.
## Project Structure
* ```index.php```: Main file with the Home Page UI and flight search logic.

* ```airline_db```: MySQL database (created in phpMyAdmin).
## Notes
* The database connection in ```index.php``` uses the default XAMPP MySQL credentials (```root``` with no password). Update these if your setup differs.

* The UI uses Bootstrap 5, loaded via CDN. An internet connection is required to render the styles properly.
## Future Improvements
* Add user registration and login for travelers and administrators.

* Implement booking functionality with a wallet system for payments.

* Use AJAX for real-time flight search without page reloads.
## Team
* Team Name: Digital Aviation Team

* Members:
  * Rewan Esam Eid
  * Mariam Mostafa Mohamed
  * Almera Fathi Mohamed
  * Nourhan Nasser Abodaif
  * Aya Elsayed Mohamed
  * Rewan Ehab Fares

* Supervisor: Dr. Mahmoud Khaled, Department of Information Technology, Sinai University
## License
This project is for educational purposes and is licensed for commercial use also.
