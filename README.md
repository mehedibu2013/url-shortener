### 📄 `README.md`

````markdown
# 🔗 Laravel URL Shortener

A simple Laravel-based application that allows users to shorten long URLs and redirect using custom short codes.

---

## 🚀 Features

- Shorten long URLs with a unique short code
- Redirect users to original URLs
- Simple form-based UI
- Built with Laravel 10+

---

## 🧰 Requirements

- PHP >= 8.1
- Composer
- MySQL
- Node.js & npm (optional, for frontend assets)
- Git

---

## 💻 Local Development Setup

### 1. Clone the Repository

```bash
git clone https://github.com/YOUR_USERNAME/url-shortener.git
cd url-shortener
````

### 2. Install Dependencies

```bash
composer install
```

### 3. Set Up Environment

```bash
cp .env.example .env
php artisan key:generate
```

Update `.env` with your local database credentials:

```dotenv
DB_DATABASE=shortener
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Set Up Database

Create the database manually (e.g. via phpMyAdmin), then:

```bash
php artisan migrate
```

### 5. Run the Application

```bash
php artisan serve
```

Visit: `http://127.0.0.1:8000`

---

## 🌐 How It Works

* User submits a long URL
* Laravel generates a 6-character short code
* User is redirected when accessing the short URL

---

## 🔌 Useful Commands

```bash
# List routes
php artisan route:list

# Clear config cache
php artisan config:clear
```

---


