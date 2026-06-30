<div align="center">

# FinSight

### Adaptive Personal Finance Management System

**Understand where your money goes.**

A modern web-based personal finance management application that helps users track income, expenses, subscriptions, and financial habits through a clean interface and an adaptive user experience.

---

![Laravel](https://img.shields.io/badge/Laravel-12-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-blue?style=for-the-badge&logo=mysql)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-UI-38BDF8?style=for-the-badge&logo=tailwindcss)
![Alpine.js](https://img.shields.io/badge/Alpine.js-Frontend-8BC0D0?style=for-the-badge&logo=alpinedotjs)

</div>

---

# About FinSight

FinSight is a personal finance management application designed to help users understand, control, and improve their financial habits.

Unlike traditional finance applications that focus only on recording transactions, FinSight focuses on providing meaningful financial insights while keeping the user experience simple, fast, and accessible.

The project is also developed as a **Software Engineering Case Study**, demonstrating the complete software development lifecycle from requirement analysis to implementation and documentation.

---

# Problem Statement

Many people know **how much they earn**, but they do not know:

- Where their money goes
- Which subscriptions are wasting money
- How much they spend every month
- Whether their spending habits are improving

FinSight aims to solve these everyday financial problems with an adaptive and user-friendly approach.

---

# Key Features

## Authentication

- Login
- Register
- Secure Authentication

---

## Hybrid Workspace

- Guest Mode (Local Storage)
- Cloud Mode (Database)
- Smooth onboarding experience

---

## Adaptive User

Choose your profile:

- Student
- Employee
- General User

The application adapts to the user's needs.

---

## Income Management

- Create Income
- Update Income
- Delete Income
- Search
- Pagination
- Responsive UI
- Form Validation

---

## Expense Management

Completed.

---

## Dashboard Analytics

- Financial Summary Cards
- Income vs Expense Chart
- Expense by Category Chart
- Recent Transactions
- Upcoming Subscriptions
- Quick Actions

---

## Planned Features

- Subscription Tracker
- Spending Insights
- Financial Health Score
- AI Transaction Entry
- Monthly Reports
- Export PDF
- Export Excel

---

# Software Architecture

FinSight follows a clean layered architecture.

```
Browser
     │
Blade View
     │
Routes
     │
Controllers
     │
Service Layer
     │
Models
     │
MySQL Database
```

### Design Principles

- MVC Architecture
- Service Layer Pattern
- SOLID Principles
- DRY
- KISS
- Clean Code
- Mobile First Design

---

# Technology Stack

| Category | Technology |
|----------|------------|
| Backend | Laravel 12 |
| Language | PHP 8.2+ |
| Frontend | Blade |
| Styling | Tailwind CSS |
| JavaScript | Alpine.js |
| Database | MySQL |
| Development | Laragon |
| Version Control | Git + GitHub |

---

# Project Structure

```
FinSight/
│
├── app/
├── bootstrap/
├── config/
├── database/
├── public/
├── resources/
├── routes/
├── docs/
│
│   ├── PROJECT_MEMORY.md
│   ├── CHANGELOG.md
│   ├── ARCHITECTURE_DECISIONS.md
│   └── SPRINTS/
│
├── tests/
│
└── README.md
```

---

# Documentation

The project is documented as a complete Software Engineering case study.

| Document | Description |
|----------|-------------|
| PROJECT_MEMORY.md | Single Source of Truth |
| CHANGELOG.md | Project history |
| ARCHITECTURE_DECISIONS.md | Architecture Decision Records |
| SPRINTS | Sprint documentation |

---

# Development Roadmap

| Sprint | Status |
|---------|--------|
| Sprint 0 | Completed |
| Sprint 1 | Completed |
| Sprint 2 | Completed |
| Sprint 3 | Completed |
| Sprint 4 | Completed |
| Sprint 5 | In Progress |
| Sprint 6 | Planned |
| Sprint 7 | Planned |
| Sprint 8 | Planned |
| Sprint 9 | Planned |

---

# Current Project Status

| Category | Status |
|----------|--------|
| Planning | Completed |
| Architecture | Completed |
| Documentation | Completed |
| Authentication | Completed |
| Income Module | Completed |
| Expense Module | Completed |
| Dashboard | Completed |
| Subscriptions | Planned |
| AI Features | Planned |

---

# Engineering Highlights

This project demonstrates:

- Requirement Engineering
- Software Architecture
- Database Design
- MVC + Service Layer
- Sprint-based Development
- Continuous Documentation
- Architecture Decision Records (ADR)
- Responsive Web Design
- Clean Code Practices

---

# Installation

Clone repository

```bash
git clone <repository-url>
```

Enter project

```bash
cd finsight
```

Install dependencies

```bash
composer install
```

Copy environment

```bash
cp .env.example .env
```

Generate application key

```bash
php artisan key:generate
```

Configure database in `.env`

Run migration

```bash
php artisan migrate
```

Start development server

```bash
php artisan serve
```

---

# Contribution

This project is currently developed as a personal portfolio and software engineering case study.

Suggestions, improvements, and discussions are welcome.

---

# Author

**BANTENGSELAM WITH HIS THOUGHT**

Information Technology Student

Developed as a portfolio project to demonstrate modern software engineering practices using Laravel.

---

# License

This project is released for educational and portfolio purposes.
