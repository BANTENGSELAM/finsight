FinSight Sprint 5A
Subscription CRUD Module

Version

v0.5.0

Sprint

5A

Status

Planned

Priority

High

Estimated Duration

1 Sprint

Complexity

Medium

Sprint Objective

Mengimplementasikan modul Subscription Management yang memungkinkan pengguna mengelola seluruh layanan berlangganan secara aman menggunakan arsitektur MVC + Service Layer tanpa mengubah struktur arsitektur yang telah ada.

Sprint ini hanya berfokus pada CRUD Subscription.

Belum mencakup analytics maupun dashboard integration.

Scope
Included
Subscription List
Add Subscription
Edit Subscription
Delete Subscription
Active / Inactive Status
Validation
Authorization
Responsive UI
Blade Components
Excluded
Dashboard Widget
Reminder
Renewal Badge
Analytics
Monthly Cost
Annual Cost
Notification

Semua fitur di atas akan dikerjakan pada Sprint berikutnya.

Business Goal

Menyediakan tempat bagi pengguna untuk mengelola seluruh layanan subscription dalam satu halaman sehingga seluruh subscription dapat dikelola sebelum digunakan oleh Dashboard Analytics.

Technical Goal

Menambahkan Subscription Module tanpa:

mengubah arsitektur
menambah technical debt
melanggar MVC
melanggar Service Layer
Existing Resources

Sudah tersedia:

subscriptions table

Subscription Model

Relationship User ↔ Subscription

Laravel Authentication

Dashboard

Design System

Blade Components

Tailwind

Dark Mode

Karena itu Sprint ini tidak membutuhkan migration baru.

Files to Create
Controller
SubscriptionController.php
Requests
StoreSubscriptionRequest.php

UpdateSubscriptionRequest.php
Service
SubscriptionService.php
Views
subscription/

index.blade.php

create.blade.php

edit.blade.php

form.blade.php
Files to Modify
routes/web.php

navigation.blade.php

README.md

CHANGELOG.md

PROJECT_STATE.md

PROJECT_MEMORY.md

SPRINT_5.md
Route Design
GET

/subscription

GET

/subscription/create

POST

/subscription

GET

/subscription/{id}/edit

PUT

/subscription/{id}

DELETE

/subscription/{id}

Menggunakan:

Route::resource()
UI Design
List

Kolom:

Service Name

Category

Billing Cycle

Amount

Next Billing Date

Status

Action
Form

Field:

Service Name

Category

Amount

Billing Cycle

Next Billing Date

Status

Notes
Validation

Service Name

Required

String

Max 255

Amount

Required

Numeric

Greater than zero

Billing Cycle

Enum

monthly

quarterly

yearly

Next Billing Date

Required

Date

Status

Boolean

Category

Exists

categories table

Authorization

Semua operasi harus menggunakan relasi user.

Contoh:

$request->user()
    ->subscriptions()

Tidak boleh:

Subscription::find()

Tanpa validasi kepemilikan data.

Architecture Rules

Harus mengikuti standar proyek.

Controller:

menerima request
memanggil service
return response

Tidak boleh ada business logic.

Service:

seluruh query
business logic
filtering
mapping
create
update
delete

Blade:

Hanya:

looping
formatting sederhana
component rendering

Tidak boleh:

query database
kalkulasi bisnis
Workflow
User

↓

SubscriptionController

↓

SubscriptionService

↓

Subscription Model

↓

Database
Risks
Low

Karena:

tabel sudah tersedia
model sudah tersedia
auth sudah tersedia
Medium

Navigasi baru.

Harus konsisten dengan dashboard.

High

Tidak ada.

Acceptance Criteria

Sprint dinyatakan selesai jika:

✅ CRUD berjalan.

✅ Validation menggunakan Form Request.

✅ Controller tipis.

✅ Service menangani business logic.

✅ Blade bebas query.

✅ UI responsive.

✅ Dark mode tetap berjalan.

✅ Audit minimal 95/100.

✅ Repository Synchronization berhasil.

Expected Repository Changes
New Files

≈ 8

Modified Files

≈ 7

Deleted Files

0
Rollback Strategy

Jika Sprint gagal:

Hapus:

SubscriptionController

SubscriptionService

Subscription Views

Subscription Requests

Route dapat dihapus tanpa mempengaruhi module lain.

Dependencies

Sprint bergantung pada:

✅ Authentication

✅ User Model

✅ Subscription Model

✅ Categories

Semua dependency telah tersedia.

Deliverables

Sprint menghasilkan:

Subscription CRUD
Unit yang siap diintegrasikan dengan Dashboard
Dokumentasi otomatis
Audit otomatis
Release synchronization
Sprint Definition of Success

Sprint dianggap berhasil apabila:

Tidak ada perubahan pada arsitektur inti.
Modul Subscription dapat digunakan secara mandiri.
Seluruh aturan Engineering Handbook dipatuhi.
Seluruh dokumentasi diperbarui secara otomatis.
Repository tetap berada pada kondisi "Production Ready".