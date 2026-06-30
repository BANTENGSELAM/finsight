Saya membaginya menjadi 10 fase.

Phase 0 — Repository Intelligence

AI wajib membaca repository.

Minimal:

README

PROJECT_STATE

PROJECT_MEMORY

ROADMAP

CHANGELOG

Architecture Decisions

Engineering Handbook

Sprint Specification

Kalau ada file yang belum ada:

Laporkan.

Jangan mengarang.

Phase 1 — Project Understanding

AI harus menjawab dulu.

Contoh:

Current Version

Current Sprint

Completed Modules

Architecture

Pending Modules

Technical Debt

Kalau AI belum memahami project,

DILARANG coding.

Phase 2 — Sprint Validation

AI membaca:

SPRINT_x_IMPLEMENTATION_PLAN.md

Kemudian menjawab:

Apakah sprint masih relevan?

Apakah ada konflik?

Apakah dependency sudah tersedia?

Kalau belum,

berhenti.

Phase 3 — Impact Analysis

Ini yang belum pernah kita lakukan.

AI membuat tabel seperti ini.

Area	Impact
Routes	✅
Controller	✅
Service	✅
Model	❌
Migration	❌
Dashboard	❌
Blade	✅

Kalau migration tidak perlu,

AI tidak membuat migration.

Phase 4 — Implementation Plan Validation

AI membuat urutan kerja.

Misalnya:

1 Controller

↓

2 Requests

↓

3 Service

↓

4 Routes

↓

5 Blade

↓

6 Testing

↓

7 Audit

Jadi AI punya roadmap sebelum coding.

Phase 5 — Engineering Rules

Bagian ini saya ingin dikunci.

Misalnya.

Controller

Maximum responsibility:

Receive request

Call Service

Return response
Service

Maximum responsibility

Business Logic

Query

Calculation

Filtering

Authorization
Blade

Presentation only
No SQL

No Business Logic

No Duplicate UI

Semua aturan ini nanti selalu ada.

Phase 6 — Coding

Baru AI coding.

Phase 7 — Self Audit

AI wajib membuat audit.

Minimal.

Architecture

Performance

Security

Maintainability

Readability

Engineering

Lalu memberi score.

Phase 8 — Repository Synchronization

Ini ide terbaik kita sejauh ini.

AI wajib mengupdate.

README

CHANGELOG

PROJECT_STATE

PROJECT_MEMORY

ROADMAP

Release Notes

Sprint Documentation

Kalau ada yang tertinggal,

Sprint gagal.

Phase 9 — Final Engineering Report

Output selalu sama.

Misalnya.

Files Created

Files Modified

Architecture Score

Engineering Score

Documentation Coverage

Repository Health

Next Sprint

Known Issues

Jadi format output selalu konsisten.