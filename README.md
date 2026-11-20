# WinArtCraft - CodeIgniter 4 Web Application & Admin Panel

Converted from WordPress (`https://winartcraft.com/`) to a standalone, high-performance PHP CodeIgniter 4 application with an integrated Admin Control Panel.

---

## 🚀 Overview

- **Frontend Platform:** PHP 8.2+ / CodeIgniter 4.7.6
- **Architecture:** MVC Pattern (Controllers, Models, Views, Filters, Migrations)
- **Design & Layout:** 100% pixel-perfect replica of winartcraft.com with Elementor grid containers, responsive styles, fonts, and layouts.
- **Assets:** 173 media items (images, logos, videos) downloaded locally in `public/assets/uploads/` — zero external dependencies on WordPress!
- **Database:** SQLite3 configured out-of-the-box in `writable/database/winartcraft.db` (zero external DB installation needed; supports MySQL seamlessly by changing config).
- **Admin Panel:** Complete authentication, dashboard, inquiries management, stories/blog CMS, workshops manager, testimonials manager, and general site settings.

---

## 🔐 Admin Panel Credentials

- **Admin Login URL:** [http://localhost:8080/admin/login](http://localhost:8080/admin/login)
- **Email:** `admin@winartcraft.com`
- **Password:** `admin123`

---

## 📁 Directory Structure

```text
winartcraft/
├── app/
│   ├── Config/
│   │   ├── Database.php                 # SQLite3 / MySQL database connection
│   │   ├── Filters.php                  # Authentication filter registration
│   │   └── Routes.php                   # Public & protected admin routes
│   ├── Controllers/
│   │   ├── Admin/
│   │   │   ├── AuthController.php       # Login & Logout authentication
│   │   │   ├── DashboardController.php  # Overview stats & recent activity
│   │   │   ├── InquiriesController.php  # Contact messages management
│   │   │   ├── ServicesController.php   # Workshops & mentoring programs
│   │   │   ├── SettingsController.php   # Studio info & admin security
│   │   │   ├── StoriesController.php    # Student stories & blog posts
│   │   │   └── TestimonialsController.php # Parent reviews & ratings
│   │   ├── About.php                    # Public About Us
│   │   ├── Contact.php                  # Contact form processor (saves to DB)
│   │   ├── Home.php                     # Public Homepage
│   │   ├── Services.php                 # Public Services
│   │   └── Stories.php                  # Public Stories archive & detail
│   ├── Database/
│   │   ├── Migrations/
│   │   │   └── 2026-11-20-080000_CreateAdminTables.php
│   │   └── Seeds/
│   │       └── AdminSeeder.php          # Seeds admin user & initial content
│   ├── Filters/
│   │   └── AdminAuth.php                # Route protection filter for /admin/*
│   ├── Models/
│   │   ├── AdminModel.php
│   │   ├── InquiryModel.php
│   │   ├── ServiceModel.php
│   │   ├── SettingModel.php
│   │   ├── StoryModel.php
│   │   └── TestimonialModel.php
│   └── Views/
│       ├── admin/
│       │   ├── auth/login.php           # Admin login interface
│       │   ├── dashboard/index.php      # Main analytics & stat cards
│       │   ├── inquiries/               # Contact message viewer & reply
│       │   ├── layout.php               # Admin master layout & responsive sidebar
│       │   ├── services/                # Workshop schedule manager
│       │   ├── settings/index.php       # Site settings & password changer
│       │   ├── stories/                 # Story editor & publisher
│       │   └── testimonials/            # Parent review management
│       ├── layouts/main.php             # Public master layout
│       └── pages/                       # Public frontend views
├── public/
│   ├── assets/
│   │   ├── css/                         # Elementor stylesheets & fonts
│   │   ├── js/                          # jQuery, Swiper.js, Navigation
│   │   ├── images/                      # Placeholders & branding
│   │   └── uploads/                     # Local media library (173 files)
│   ├── favicon.ico
│   └── index.php
├── writable/
│   └── database/
│       └── winartcraft.db               # SQLite database file
├── .env
└── composer.json
```

---

## 🔗 Route Map

### Frontend Routes
| URL Route | Controller Action | Description |
| :--- | :--- | :--- |
| `/` | `Home::index` | Homepage with Hero, Showcase, Testimonials, Map & Form |
| `/about-us` | `About::index` | Vision, Milestones & Why Choose Windows |
| `/services` | `Services::index` | Workshop schedule, Mentoring programs & Events |
| `/stories` | `Stories::index` | Stories index & Art Showcase |
| `/stories/(:segment)` | `Stories::detail` | Single story detail view |
| `/contact/send` (POST) | `Contact::send` | Saves message to database & sets flash message |

### Admin Routes (Protected by `AdminAuth`)
| URL Route | Controller Action | Description |
| :--- | :--- | :--- |
| `/admin/login` | `Admin\AuthController::login` | Admin login page |
| `/admin/logout` | `Admin\AuthController::logout` | Terminates admin session |
| `/admin` | `Admin\DashboardController::index` | Overview statistics & quick shortcuts |
| `/admin/inquiries` | `Admin\InquiriesController::index` | View & delete contact inquiries |
| `/admin/stories` | `Admin\StoriesController::index` | Create, edit, and publish stories |
| `/admin/services` | `Admin\ServicesController::index` | Manage workshop times & classes |
| `/admin/testimonials` | `Admin\TestimonialsController::index` | Manage parent testimonials & stars |
| `/admin/settings` | `Admin\SettingsController::index` | Update studio info, socials & password |

---

## 🛠️ How to Run Locally

1. Open PowerShell in `E:\Saurav\winartcraft`.
2. Start the built-in development server:
   ```bash
   php spark serve --port 8080
   ```
3. Visit the live public website:
   👉 [http://localhost:8080/](http://localhost:8080/)
4. Visit the Admin Control Panel:
   👉 [http://localhost:8080/admin](http://localhost:8080/admin)
