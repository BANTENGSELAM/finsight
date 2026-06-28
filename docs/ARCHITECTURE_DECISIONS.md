# ARCHITECTURE_DECISIONS.md

# FinSight Architecture Decision Records (ADR)

This document records the major architectural decisions made during the development of FinSight.

Each decision includes the context, rationale, consequences, and current status.

---

# ADR-001

## Title

Adopt Laravel 12 as the Main Framework

### Status

Accepted

### Context

FinSight requires a modern web framework that supports rapid development, authentication, database abstraction, routing, validation, and long-term maintainability.

### Decision

Laravel 12 is adopted as the backend framework.

### Rationale

* Mature ecosystem
* Excellent documentation
* Built-in authentication
* Eloquent ORM
* Artisan CLI
* Strong community support

### Consequences

Positive

* Faster development
* Easier maintenance
* High scalability

Negative

* Slightly higher resource usage compared to micro-frameworks

---

# ADR-002

## Title

Use MVC with Service Layer Architecture

### Status

Accepted

### Context

Business logic should not be tightly coupled with controllers.

### Decision

Controllers remain thin.

Business logic is placed inside dedicated Service classes.

### Rationale

* Better separation of concerns
* Easier testing
* Easier maintenance
* More reusable business logic

### Consequences

Positive

* Cleaner architecture
* Better scalability
* Easier future refactoring

---

# ADR-003

## Title

Use a Single Transactions Table for Income and Expense

### Status

Accepted

### Context

Income and Expense share almost identical attributes.

### Decision

Store both entities inside the transactions table.

Differentiate records using the type column.

Possible values

* income
* expense

### Rationale

* Avoid duplicate schema
* Simplify reporting
* Easier aggregation
* Easier dashboard analytics

### Consequences

Positive

* Simpler database
* Better maintainability
* Easier financial calculations

---

# ADR-004

## Title

Implement Hybrid Workspace Mode

### Status

Accepted

### Context

Many personal finance applications require registration before allowing users to try the application.

This increases onboarding friction.

### Decision

Provide two workspace modes.

Guest Mode

Cloud Mode

### Guest Mode

Uses Local Storage.

No registration required.

### Cloud Mode

Uses Laravel Authentication.

Stores data permanently.

### Rationale

* Better user experience
* Faster onboarding
* Privacy friendly
* Suitable for first-time users

### Consequences

Positive

* Lower entry barrier
* Higher usability

---

# ADR-005

## Title

Use Blade + Tailwind CSS + Alpine.js

### Status

Accepted

### Context

The application does not require a heavy Single Page Application architecture.

### Decision

Use Blade as the rendering engine.

Use Tailwind CSS for styling.

Use Alpine.js for lightweight interactivity.

### Rationale

* Lightweight
* Fast development
* Native Laravel ecosystem
* Lower complexity

### Consequences

Positive

* Smaller bundle size
* Easier maintenance
* Faster rendering

---

# ADR-006

## Title

Use Form Request Validation

### Status

Accepted

### Context

Validation logic inside controllers quickly becomes difficult to maintain.

### Decision

All validation must use Laravel Form Requests.

### Rationale

* Cleaner controllers
* Reusable validation
* Better separation of concerns

### Consequences

Positive

* Consistent validation
* Better readability

---

# ADR-007

## Title

Use TransactionService as the Business Layer

### Status

Accepted

### Context

Income and Expense belong to the same financial transaction domain.

### Decision

Use a single TransactionService instead of separate IncomeService and ExpenseService.

### Rationale

* Avoid duplicated logic
* Centralize transaction rules
* Simplify maintenance

### Consequences

Positive

* Less duplicated code
* Easier extension
* Better consistency

---

# ADR-008

## Title

Adopt Sprint-Based Development

### Status

Accepted

### Context

The project is developed incrementally.

### Decision

Development is divided into independent sprints.

Each sprint delivers one complete business capability.

### Rationale

* Easier planning
* Easier testing
* Better progress tracking
* Continuous documentation

### Consequences

Positive

* Predictable development
* Better project organization

---

# ADR-009

## Title

Maintain Documentation as Living Documents

### Status

Accepted

### Context

Project documentation often becomes outdated.

### Decision

Core documents must be updated after every sprint.

Documents include:

* PROJECT_MEMORY.md
* CHANGELOG.md
* ARCHITECTURE_DECISIONS.md
* Sprint Documentation

### Rationale

* Preserve project knowledge
* Improve collaboration
* Reduce onboarding time

### Consequences

Positive

* Documentation remains relevant
* Easier future development

---

# ADR-010

## Title

Prioritize Reusable Components

### Status

Accepted

### Context

Repeated UI and business logic increase maintenance costs.

### Decision

Reusable Blade components and shared services must be preferred over duplicated implementations.

### Rationale

* DRY Principle
* Consistent UI
* Easier updates

### Consequences

Positive

* Better maintainability
* Cleaner codebase

---

# Future ADRs

The following architectural decisions are expected in future sprints.

* Dashboard Analytics Strategy
* Financial Health Score Algorithm
* AI Transaction Parsing Strategy
* Subscription Reminder Strategy
* Report Export Architecture
* Notification System
* Caching Strategy
* Authorization Policy Strategy
* Testing Strategy
* Deployment Strategy

---

# ADR Guidelines

Every future architectural decision should include:

1. Title
2. Status
3. Context
4. Decision
5. Rationale
6. Consequences

No architectural decision should be implemented without being documented in this file.

End of Document.
