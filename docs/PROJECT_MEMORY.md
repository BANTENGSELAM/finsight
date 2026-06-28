# PROJECT_MEMORY.md

# FinSight Project Memory

> **Single Source of Truth (SSOT)** for the FinSight project.
>
> This document contains the current state of the project and must be reviewed before implementing any new feature.

---

# Project Information

## Project Name

FinSight

## Tagline

Understand where your money goes.

## Project Type

Adaptive Personal Finance Management System with Subscription Tracking, Spending Insights, and AI-powered Transaction Entry.

## Current Version

v0.3.0

## Development Status

🟢 Active Development

---

# Vision

FinSight is a modern web-based personal finance management application designed to help users understand, control, and improve their financial habits.

The application focuses on simplicity, usability, and actionable insights rather than complex accounting.

---

# Target Users

* Students
* Employees
* General Users

---

# Technology Stack

Backend

* Laravel 12.62.0
* PHP 8.2+

Frontend

* Blade
* Tailwind CSS
* Alpine.js

Database

* MySQL

Development Environment

* Laragon

Version Control

* Git
* GitHub

---

# Architecture

Architecture Pattern

MVC + Service Layer

Request Flow

User

↓

Blade View

↓

Route

↓

Controller

↓

Service

↓

Model

↓

Database

---

# Development Principles

Always Follow

* SOLID Principles
* DRY
* KISS
* Single Responsibility Principle
* Clean Code
* Responsive Design
* Mobile First

Never

* Put business logic inside Blade
* Put business logic inside Routes
* Create Fat Controllers
* Duplicate business logic
* Introduce Vue.js or React

---

# Workspace Modes

## Guest Mode

* Uses Browser Local Storage
* Does not create database records

## Cloud Mode

* Uses Laravel Authentication
* Stores data in MySQL

---

# Current Database

Existing Tables

* users
* categories
* transactions
* subscriptions
* cache
* jobs

Main Business Tables

* categories
* transactions
* subscriptions

---

# Domain Model

Income

↓

Transaction

↓

type = income

Expense

↓

Transaction

↓

type = expense

Subscriptions

↓

Independent Entity

---

# Current Services

Implemented

* TransactionService

Planned

* DashboardService
* InsightService

---

# Current Controllers

Implemented

* IncomeController

Planned

* ExpenseController
* DashboardController
* SubscriptionController
* ReportController

---

# Current Modules

Completed

✅ Authentication

✅ User Registration

✅ Login

✅ Workspace Selection

✅ Guest Mode

✅ User Type Onboarding

✅ Default Categories

✅ Income Management Module

In Progress

—

Not Started

* Expense Management
* Dashboard Analytics
* Subscription Management
* Reports
* Financial Health Score
* Smart Insights
* AI Quick Entry

---

# Sprint Progress

Sprint 0

Status:

✅ Completed

Contents

* Requirement Analysis
* Use Case
* ERD
* Architecture
* UI Planning

---

Sprint 1

Status:

✅ Completed

Contents

* Authentication
* Workspace Selection
* Guest Mode
* User Type
* Default Categories

---

Sprint 2

Status

✅ Completed

Contents

* Income CRUD
* Form Request Validation
* TransactionService Integration
* Responsive UI
* Alpine.js Delete Confirmation

Audit Result

Architecture Score

100/100

Code Quality

100/100

Ready for Sprint 3

YES

---

Sprint 3

Status

⏳ Not Started

Objective

Expense Management Module

---

# Reusable Components

Current

* Card Component
* Delete Confirmation Modal
* Statistic Card

---

# Design System

Primary

#2563EB

Success

#22C55E

Warning

#F59E0B

Danger

#EF4444

Background

#F8FAFC

---

# Important Architecture Decisions

Decision 001

Income and Expense share the same transactions table.

Reason

Both represent financial transactions.

---

Decision 002

Business logic must remain inside Service Layer.

Reason

Maintain thin controllers and improve maintainability.

---

Decision 003

Guest Mode uses Browser Local Storage.

Reason

Reduce onboarding friction and improve user experience.

---

Decision 004

Blade + Alpine.js is preferred over Vue/React.

Reason

Keep the application lightweight and aligned with Laravel ecosystem.

---

# Current Project Health

Architecture

★★★★★

Database

★★★★★

Maintainability

★★★★★

Scalability

★★★★★

Documentation

★★★★☆

Testing

★★☆☆☆

Overall

★★★★★

---

# Next Sprint

Sprint 3

Expense Management Module

Goals

* Expense CRUD
* TransactionService Extension
* Expense Validation
* Expense UI
* Responsive Layout
* Reuse Existing Components

---

# Notes for Future AI Sessions

Before implementing any new feature:

1. Read this document completely.
2. Respect MVC + Service Layer architecture.
3. Reuse existing components.
4. Do not recreate existing migrations.
5. Do not duplicate business logic.
6. Only implement the current sprint.
7. Update this file after the sprint is completed.

End of PROJECT_MEMORY.md
