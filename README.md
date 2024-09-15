🎮 Gaming-Store

Welcome to the Gaming-Store project! This PHP-based web application allows users to securely log in and manage their profiles. The application implements prepared SQL statements for security, user session management, and error handling to enhance the user experience.
🚀 Features

    User Authentication: Secure login functionality using prepared statements and password hashing.
    Session Management: Stores user session details such as names, id, and admin status after successful login.
    Error Handling: Displays errors such as incorrect username or password through cookies and redirects.
    Responsive Design: Built with Bootstrap 4 for mobile-friendly, responsive layouts.

📂 Project Structure

    index.php: Main entry point for user login.
    connect.php: Contains the database connection logic.
    login.php: Handles the login form submission and user authentication.
    add-product.php: Redirects logged-in users to a product management page after successful login.
    navbar.php: Includes the navigation bar for easy access across pages.
    alert.php: Displays alert messages, such as login errors or success messages.

🛠️ Technologies Used

    PHP: Core backend scripting language.
    MySQL: For database management.
    Bootstrap 4: For responsive design.
    JavaScript/jQuery: To enhance interactive elements on the frontend.

🧾 Instructions
1. Clone the Repository

bash

git clone https://github.com/your-username/gaming-store.git
cd gaming-store

2. Set Up the Database

Create a MySQL database and a users table with the following structure:

sql

CREATE TABLE `users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `names` VARCHAR(255) NOT NULL,
  `admin` TINYINT(1) DEFAULT 0,
  PRIMARY KEY (`id`)
);

3. Configure the Database Connection

Update the connect.php file with your database credentials:

php

$host = "your-host";
$user = "your-username";
$pass = "your-password";
$dbname = "your-database";

$con = mysqli_connect($host, $user, $pass, $dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

4. Running the Application

    Place the project files in the root folder of your local server (e.g., XAMPP's htdocs folder).
    Start your local server (Apache and MySQL) using XAMPP.
    Open the application in your browser at http://localhost/gaming-store/login.php.

5. Logging In

    Use the following credentials to log in as an admin (make sure this data exists in your database):

bash

Email: admin@example.com
Password: your-password

🛡️ Security Considerations

    Prepared Statements: SQL queries are prepared and executed securely to prevent SQL injection attacks.
    Password Hashing: Passwords are stored as hashes and verified using PHP's password_verify() function.
    Session Management: User sessions are securely managed, ensuring the safety of user data during their logged-in session.

📄 License

This project is licensed under the MIT License.
