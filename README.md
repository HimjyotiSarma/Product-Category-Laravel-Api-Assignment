# Product & Category Management API

A RESTful API built with **Laravel 12** for managing products and categories, including authentication, filtering, pagination, and clean API responses.

This project was developed as a backend practical task, following Laravel best practices and clean architecture principles.

---

## 🚀 Features

### Authentication

- User registration
- User login with API token (Laravel Sanctum)
- User logout (token revocation)

### Category Management

- Create category
- List categories (paginated)
- View category details
- Update category
- Soft delete category

### Product Management

- Create product
- List products (paginated)
- View product details
- Update product
- Delete product (soft delete)
- Product belongs to a category

### Filtering & Search (Products)

- Filter by category
- Filter by status (`active`, `inactive`)
- Filter by minimum price
- Filter by maximum price
- Search by product name

### Code Quality

- Form Request validation
- API Resources for responses
- Clean controllers
- Global exception handling
- Consistent JSON responses

---

## 🛠 Tech Stack

- **Laravel 12**
- **Laravel Sanctum** (API authentication)
- **MySQL / PostgreSQL** (or any supported DB)
- PHP 8.2+

---

## 📦 Installation

### 1. Clone the Repository

```bash
git clone <repository-url>
cd product-api
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

_NOTE: Update your database credentials in .env._

### 4. Run Migrations

```bash
php artisan migrate
```

---

## 🔐 Authentication Endpoints

| Method | Endpoint      | Description |
| ------ | ------------- | ----------- |
| POST   | /api/register | Register    |
| POST   | /api/login    | Login       |
| POST   | /api/logout   | Logout      |

---

## 📂 Category Endpoints

| Method | Endpoint             |
| ------ | -------------------- |
| GET    | /api/categories      |
| POST   | /api/categories      |
| GET    | /api/categories/{id} |
| PUT    | /api/categories/{id} |
| DELETE | /api/categories/{id} |

---

## 📦 Product Endpoints

| Method | Endpoint           |
| ------ | ------------------ |
| GET    | /api/products      |
| POST   | /api/products      |
| GET    | /api/products/{id} |
| PUT    | /api/products/{id} |
| DELETE | /api/products/{id} |

---

## 🔍 Product Filters

```
/api/products?category_id=1
/api/products?status=active
/api/products?min_price=100&max_price=500
/api/products?search=phone
/api/products?page=1&per_page=10
```

---

## 📄 API Response Format

### Success

```json
{
    "status": true,
    "message": "Operation successful",
    "data": {}
}
```

### Validation Error

```json
{
    "status": false,
    "message": "Validation error",
    "errors": {}
}
```

---
