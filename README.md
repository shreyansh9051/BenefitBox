# BenefitBox

This is a Laravel-based web application for managing **Plans**, **Combo Plans**, and **Eligibility Criteria**. The system provides an intuitive interface for CRUD (Create, Read, Update, Delete) operations on these entities, with a modern UI built using Tailwind CSS.

---

## Features

- **Plans Management**: Create, view, edit, and delete individual plans.
- **Combo Plans**: Manage combo plans that bundle multiple plans together.
- **Eligibility Criteria**: Define and manage eligibility criteria for plans.
- **Pagination**: All listing pages are paginated for better usability.
- **Reusable Components**: Card components for consistent display of items.
- **Modern UI**: Responsive design using Tailwind CSS.
- **Confirmation Dialogs**: Safe deletion with confirmation prompts.

---

## Getting Started

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js & npm
- MySQL or compatible database

### Installation

1. **Clone the repository**
   ```
   git clone <repository-url>
   cd <project-directory>
   ```

2. **Install dependencies**
   ```
   composer install
   npm install
   npm run dev
   ```

3. **Configure environment**
   - Copy `.env.example` to `.env` and set your database credentials.
   - Generate application key:
     ```
     php artisan key:generate
     ```

4. **Run migrations**
   ```
   php artisan migrate
   ```

5. **Seed the database (optional)**
   ```
   php artisan db:seed
   ```

6. **Start the development server**
   ```
   php artisan serve
   ```

---

## Usage

- Access the app at `http://localhost:8000`
- Navigate to:
  - `/plans` for managing Plans
  - `/combo-plans` for Combo Plans
  - `/eligibility-criteria` for Eligibility Criteria

Each section allows you to create, edit, and delete records. Use the "Create" button to add new entries.

---

## File Structure

- `resources/views/pages/plan/index.blade.php` - Plans listing and management
- `resources/views/pages/combo-plan/index.blade.php` - Combo Plans management
- `resources/views/pages/eligibility-criteria/index.blade.php` - Eligibility Criteria management
- `resources/views/components/card.blade.php` - Reusable card component for displaying items

---

## Customization

- **Styling**: Modify Tailwind classes in Blade files for custom look.
- **Components**: Extend or modify the `card` component for additional fields or actions.
- **Routes & Controllers**: Add new features by creating new controllers and views as needed.

---
