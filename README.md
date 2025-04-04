# 🏫 School Management System

**School Management System** is a comprehensive web application developed by [Utsho909](https://github.com/Utsho909) to streamline and manage various administrative and academic operations of educational institutions. The system aims to enhance the efficiency of school management through its user-friendly interface and robust features.

## Features

- **User Roles:**
  - **Admin:** Manage users, oversee system-wide functions, and configure settings.
  - **Teacher:** Add and manage notes, assignments, and monitor student progress.
  - **Student:** Access personal information, view study materials, and track academic performance.

- **Attendance Management:** Track and manage student attendance efficiently.

- **Performance Assessment:** Evaluate and record student performance through assignments and exams.

- **Communication:** Facilitate seamless interaction between students, teachers, and administrators.

## Technologies Used

- **Frontend:**
  - HTML5
  - CSS3
  SCSS
  Less
  JavaScript

- **Backend:**
  - PHP

- **Database:**
  - MySQL

## Development

The development of the School Management System includes:

- Designing a responsive and intuitive user interface.
- Implementing role-based access control for secure and personalized user experiences.
- Ensuring efficient data management and storage using MySQL.
- Optimizing performance for fast load times and smooth operation.

## Deployment

The system is designed for deployment on web servers supporting PHP and MySQL. It is compatible with various hosting environments and can be easily set up to cater to the specific needs of educational institutions.

## Installation

1. **Clone the Repository:**

   ```bash
   git clone https://github.com/Utsho909/School-Management.git
2.**Navigate to the Project Directory:**
  
  ```bash
  cd School-Management.
```
3.**Set Up the Database:**

Create a new MySQL database.

Import the `school_management_system.sql` file (located in the assets folder) into your MySQL database to set up the necessary tables.

4.**Configure Database Connection:**

Open the `config.php` file.

Update the database connection settings with your MySQL credentials:

```bash<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "school_management";
?>
```
5.**Deploy the Application:**

Upload the project files to your web server's root directory.

Ensure that your server supports PHP and has MySQL installed.

Access the application through your browser by navigating to your server's URL.

Folder Structure 

```bash
School-Management/
│
├── assets/
│   ├── school_management_system.sql    # Database schema
│   └── (other assets like images, documents, etc.)
│
├── user/
│   ├── index.php
│   ├── homee.php
│   └── (other user-related PHP files)
│
├── config.php                         # Database configuration
├── index.php                          # Landing page
└── README.md                          # Project documentation`

```
