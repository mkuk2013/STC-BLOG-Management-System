# STC Blog Management System

A complete **Blog Management System** developed as an educational project by the **Super Sys-Tech Computers Centre Web Development Students**.

> **Educational Purpose Only**

## 📌 Project Overview

The STC Blog Management System is a PHP and MySQL-based web application that allows users to read blog posts and provides administrators with tools to manage posts, categories, users, and comments.

The project is designed to help students practice real-world web development concepts by building the system themselves instead of relying on AI-generated code or vibe coding.

## 🎯 Project Objectives

Students will practice:

- HTML5 page structure
- CSS3 styling
- Bootstrap responsive design
- JavaScript functionality
- AJAX/API communication
- PHP backend development
- MySQL database management
- CRUD operations
- User authentication
- Sessions and authorization
- Secure database queries
- REST API development

## 🛠️ Technologies

### Frontend
- HTML5
- CSS3
- JavaScript
- Bootstrap

### Backend
- PHP
- MySQL
- mysqli
- Prepared Statements
- REST API

### Development Environment
- XAMPP
- Apache
- MySQL
- phpMyAdmin
- VS Code

## ✨ Main Features

### 👤 User Features

- User registration
- User login/logout
- View blog posts
- Search posts
- View post details
- Categories
- Comments
- Responsive design

### 🔐 Admin Features

- Admin login
- Dashboard
- Add posts
- Edit posts
- Delete posts
- Manage categories
- Manage users
- Manage comments
- View statistics

### 🔌 API Features

Example REST API endpoints:

```text
GET    /api/posts
GET    /api/posts/{id}
POST   /api/posts
PUT    /api/posts/{id}
DELETE /api/posts/{id}
```

## 🗄️ Database Structure

Suggested database:

```text
stc_blog
│
├── users
│   ├── id
│   ├── name
│   ├── email
│   ├── password
│   └── role
│
├── posts
│   ├── id
│   ├── title
│   ├── content
│   ├── image
│   ├── category_id
│   ├── author_id
│   └── created_at
│
├── categories
│   ├── id
│   └── name
│
└── comments
    ├── id
    ├── post_id
    ├── user_id
    ├── comment
    └── created_at
```

## 📁 Suggested Project Structure

```text
stc-blog/
│
├── index.php
├── about.php
├── blogs.php
├── blog-details.php
├── contact.php
├── login.php
├── register.php
│
├── admin/
│   ├── index.php
│   ├── posts.php
│   ├── categories.php
│   ├── users.php
│   └── comments.php
│
├── api/
│   ├── posts.php
│   ├── categories.php
│   └── users.php
│
├── config/
│   └── database.php
│
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── auth.php
│
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
│
└── database/
    └── stc_blog.sql
```

## 🔒 Security Requirements

Students must not directly concatenate user input into SQL queries.

Use **prepared statements**:

```php
$stmt = mysqli_prepare(
    $conn,
    "SELECT * FROM users WHERE email = ?"
);

mysqli_stmt_bind_param($stmt, "s", $email);
mysqli_stmt_execute($stmt);
```

Passwords should be stored using:

```php
password_hash()
```

And verified using:

```php
password_verify()
```

Students should also implement:

- Input validation
- Session security
- Authentication
- Authorization
- SQL Injection protection
- Proper error handling

## 🚀 Installation

### 1. Install XAMPP

Start:

```text
Apache
MySQL
```

### 2. Copy Project

Place the project inside:

```text
xampp/htdocs/
```

Example:

```text
xampp/htdocs/stc-blog/
```

### 3. Create Database

Open phpMyAdmin and create:

```text
stc_blog
```

Import:

```text
database/stc_blog.sql
```

### 4. Configure Database

Update:

```text
config/database.php
```

Example:

```php
$host = "localhost";
$user = "root";
$password = "";
$database = "stc_blog";
```

### 5. Run Project

Open:

```text
http://localhost/stc-blog/
```

## 📚 Student Development Rules

This project is primarily a **student learning project**.

Students should:

1. Write the code themselves.
2. Understand every part of the code they submit.
3. Build features step-by-step.
4. Use official documentation for learning.
5. Debug their own errors before asking for help.
6. Explain their implementation during project evaluation.

### 🚫 AI/Vibe Coding Policy

Students should **not use AI/vibe coding tools to generate the complete project**.

AI-generated code should not replace the student's own understanding and implementation.

> **The objective is not simply to produce a working website.**
>
> **The objective is to learn how to build a working website.**

## 🏆 Learning Outcome

After completing this project, students should understand how to build a complete web application using:

```text
HTML
  ↓
CSS + Bootstrap
  ↓
JavaScript
  ↓
MySQL
  ↓
PHP
  ↓
Authentication
  ↓
CRUD
  ↓
AJAX / REST API
```

## 👨‍💻 Developed By

**Super Sys-Tech Computers Centre Web Development Students**

### Educational Purpose Only

This project is intended for **learning, practice, and educational demonstration**.

## 📄 License

This project is created for educational purposes. Students may modify and improve the project as part of their learning.
