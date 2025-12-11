# Student Record CRUD (Basic PHP Version)

This is the basic version of the Student Record Management System built using Core PHP and MySQL. It allows you to add, display, edit, and delete student records using a simple interface.

---

## Features

* Add new student
* Display all student records
* Edit existing student details
* Delete student record
* Simple core PHP implementation without any UI framework

---

## Technologies Used

* PHP (Core PHP)
* MySQL / phpMyAdmin
* HTML5
* CSS (Basic styling)

---

## Project Structure

```
student-record-crud-basic/
│-- add_student.php
│-- display_records.php
│-- action.php
│-- database.sql
│-- README.md
```

---

## Database Structure

```
CREATE TABLE `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(100) NOT NULL,
  `class_division` varchar(10) NOT NULL,
  `roll_number` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);
```

---

## How to Run

1. Copy this folder to your XAMPP htdocs directory:
   `C:/xampp/htdocs/student-record-crud-basic/`

2. Start Apache and MySQL from XAMPP.

3. Open phpMyAdmin and import the `database.sql` file.

4. Open this URL in your browser:

```
http://localhost/student-record-crud-basic/display_records.php
```

---

## Author
Suraj Gupta

