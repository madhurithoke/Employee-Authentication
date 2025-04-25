# Employee Management System (PHP + MySQL)

This is a basic **Employee Management System** developed using **PHP**, **MySQL**, **HTML**, **CSS** and **Bootstrap**. It provides a simple web interface for managing employee data, including login authentication, employee registration, and update/delete functionalities.

## Features

-  Secure Login with password hashing
-  Add new employees
-  View all registered employees
-  Edit employee details
-  Delete employee records
-  Status control (On/Off) to restrict login
-  Responsive UI with a reusable navigation bar
-  Centered login and add form
-  alert and confirm boxes to show successful messages.
-  Minimal and responsive layout
-  Error handling and validation

## Technologies Used

- **Frontend**: HTML5, CSS3 (custom and Bootstrap-inspired),Basic JavaScript(prompt-alert booxes).
- **Backend**: PHP (MySQLi)
- **Database**: MySQL
- **Server**: XAMPP (Apache & MySQL)

## File Desciptions:
1. **add.php**   : Page to register a new employee with form and validation.
2. **login.php** : Login screen where employee logs in using mobile number and password.
3. **index.php** : Dashboard that lists all employees in a table with Edit/Delete links.
4. **edit.php**  : Edit existing employee details based on ID (uses GET + POST).
5. **delete.php**: Deletes employee record by ID via query string.
6. **nav.php**   : Shared navigation bar (included at the top of all pages).
7. **db.php**    : Handles database connection using MySQLi.
8. **data.sql**  : SQL script to create the employees table and structure.

## How to Run the Project Locally

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) or similar
- PHP 7.4+ and MySQL
- Web browser

### 🔧 Setup Steps

1. **Place folder in XAMPP directory:**
   - Copy this entire `Employee-Authentication/` folder into:  
     `C:\xampp\htdocs\Employee-Authentication\`

2. **Start Services:**
   - Open XAMPP control panel
   - Start **Apache** and **MySQL**

3. **Create Database:**
   - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database called `employee_project`
   - Import the file `data.sql` provided in this project

4. **Open in Browser:**
   - Navigate to:  
     [http://localhost/Employee-Authentication/login.php](http://localhost/Employee-Authentication/login.php)

##  Database Schema (from `data.sql`)

```sql
CREATE TABLE employees (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  mobile VARCHAR(10) NOT NULL UNIQUE,
  password VARCHAR(255) NOT NULL,
  status ENUM('on','off') DEFAULT 'on'
);




