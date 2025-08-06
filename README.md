# Employee Data Entry Form

A simple web application for entering and searching employee records using PHP and MySQL.

## Features

- Add new employee details (ID, Name, Gender, Email, Department, Address)
- Search for employees by ID
- Clean, modern UI with responsive form styling

## Technologies Used

- HTML5
- CSS3
- PHP (server-side)
- MySQL (database)
- XAMPP (recommended for local development)

## Setup Instructions

1. **Clone or Download the Repository**
   ```
   git clone https://github.com/yourusername/employee-form.git
   ```

2. **Start XAMPP and MySQL**
   - Make sure Apache and MySQL are running.

3. **Create the Database**
   - Open phpMyAdmin.
   - Create a database named `employee_db`.
   - Run the following SQL to create the `employees` table:
     ```sql
     CREATE TABLE employees (
       emp_id VARCHAR(20) PRIMARY KEY,
       name VARCHAR(100),
       gender VARCHAR(10),
       email VARCHAR(100),
       department VARCHAR(50),
       address TEXT
     );
     ```

4. **Place the Project Files**
   - Copy the project folder to `c:\xampp\htdocs\employee-form`.

5. **Access the Application**
   - Open your browser and go to:  
     `http://localhost/employee-form/index.html`

## File Structure

- `index.html` — Main form and search interface
- `insert.php` — Handles saving employee data to the database
- `search.php` — Handles searching and displaying employee data
- `style.css` — Styles for the form and page

## Usage

- **Add Employee:** Fill out the form and click "Save".
- **Clear Form:** Click "Clear" to reset all fields.
- **Search Employee:** Enter an employee ID and click "Search".

## Notes

- Default MySQL credentials are used (`root` user, no password). Change these in PHP files for production use.
- For local development, XAMPP is recommended.

## License

MIT License
