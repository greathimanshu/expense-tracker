# 💰 Advanced Expense Tracker (Laravel 12 + Livewire 3)

![Laravel](https://img.shields.io/badge/Laravel-12.x-red?style=flat-square&logo=laravel)
![Livewire](https://img.shields.io/badge/Livewire-3.x-purple?style=flat-square&logo=livewire)
![PHP](https://img.shields.io/badge/PHP-8.2-blue?style=flat-square&logo=php)
![License](https://img.shields.io/badge/license-MIT-green?style=flat-square)

An **Advanced Expense Tracker** built with **Laravel 12** and **Livewire 3**, featuring a modern admin panel, role-based authentication, expense & income management, analytics dashboard, and real-time UI updates.

---

## 🚀 Features

### 🔑 Authentication & Security

-   Admin & User **role-based guards**
-   Secure login/logout with session regeneration
-   Password visibility toggle
-   Flash notifications for actions

### 📊 Admin Panel

-   User management (CRUD)
-   View all expenses & incomes
-   Category & Tag management
-   Monthly/Yearly analytics with charts
-   Export reports (PDF, Excel)

### 👤 User Panel

-   Add/Edit/Delete expenses & incomes
-   Set recurring transactions
-   Filter & search by date/category
-   Visual graphs for budget tracking

### 📱 UI/UX

-   Responsive Bootstrap 5 + custom icons
-   Dynamic sidebar & dropdown menus
-   Real-time updates via Livewire
-   Dark/Light theme support _(optional)_

---

## 📂 Project Structure

├── app/
│ ├── Http/
│ │ └── Livewire/ // Livewire components
│ ├── Models/ // Eloquent models (User, Category, Transaction)
│ └── ...
├── database/
│ └── migrations/ // Table structures (users, categories, transactions, etc.)
├── resources/
│ ├── views/
│ │ ├── livewire/ // Livewire blade components
│ │ ├── layouts/ // Main layout and partials
│ │ └── ...
│ └── ...
├── routes/
│ └── web.php // Web routes
├── public/
│ ├── assets/ // Custom JS/CSS/icons
├── package.json
├── composer.json
└── README.md

---

## 🛠️ Installation

1. **Clone the repository**
   git clone https://github.com/greathimanshu/advanced-expense-tracker.git
   cd advanced-expense-tracker

2. **Install dependencies**
   composer install
   npm install && npm run dev

3. **Environment setup**
   cp .env.example .env
   php artisan key:generate

Set your DB credentials in .env

4. **Database migration and seeding**
   php artisan migrate --seed

5. **Serve the application**
   php artisan serve

---

## 📄 Usage Guide

-   **Admin Login:** `admin@admin.com` / `password` (change in seeders for production)
-   **Add Categories, Tags, and Users** from the Admin panel
-   **Switch roles** to test user/admin experiences
-   **Try dark/light mode** from the user menu
-   **Export reports** via dashboards

---

## 💡 Extending the App

-   Integrate bank APIs for live transactions
-   Add OCR receipt scanning
-   Enable 2FA with Laravel Fortify
-   Plug in real-time PWA notifications

---

## 👨💻 Author

**greatHimanshu**

---

> MIT Licensed. Designed for personal finance, freelancers, and small teams. Contributions are welcome!
