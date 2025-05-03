# CoolTech Solutions Website

## Project Overview
This repository contains the source code for the CoolTech Solutions website, a professional platform for an AC repair and installation service company built using Laravel with Blade templating. The website showcases services, provides contact information, and allows customers to request quotes or schedule appointments.

## Features
- **Homepage**: Introduces CoolTech Solutions with a clear value proposition and call-to-action buttons.
- **Services Page**: Details AC repair, installation, and maintenance services with descriptions and pricing (if applicable).
- **Contact Form**: Enables users to submit inquiries or request quotes, processed via Laravel's backend.
- **About Us**: Highlights the company’s mission, team, and expertise in the HVAC industry.
- **Responsive Design**: Optimized for mobile, tablet, and desktop devices using Blade templates and CSS.
- **SEO Optimization**: Structured for better search engine visibility with Laravel SEO packages or meta tags.

## Tech Stack
- **Framework**: Laravel (PHP) with Blade templating
- **Frontend**: Blade templates, CSS, JavaScript (optional: Tailwind CSS or Bootstrap)
- **Database**: MySQL or SQLite (configurable in `.env`)
- **Backend**: Laravel for routing, form handling, and dynamic content
- **Hosting**: Deployed on platforms like Laravel Forge, Heroku, or traditional servers
- **Analytics**: Google Analytics or similar for tracking user engagement

## Prerequisites
- PHP >= 8.1
- Composer
- Node.js and NPM (for frontend assets)
- MySQL or SQLite
- Laravel CLI (optional)

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/cooltech-solutions.git
   ```
2. Navigate to the project directory:
   ```bash
   cd cooltech-solutions
   ```
3. Install PHP dependencies:
   ```bash
   composer install
   ```
4. Install frontend dependencies:
   ```bash
   npm install
   ```
5. Copy the `.env.example` file to `.env`:
   ```bash
   cp .env.example .env
   ```
6. Generate an application key:
   ```bash
   php artisan key:generate
   ```
7. Configure the `.env` file with your database credentials and other settings.
8. Run database migrations:
   ```bash
   php artisan migrate
   ```
9. Compile frontend assets:
   ```bash
   npm run dev
   ```
10. Start the development server:
    ```bash
    php artisan serve
    ```
    Access the site at `http://localhost:8000`.

## Deployment
- **Server Setup**: Use Laravel Forge, Heroku, or a traditional server with PHP, MySQL, and a web server (e.g., Nginx or Apache).
- **Environment**: Update `.env` for production (e.g., `APP_ENV=production`, database credentials).
- **Assets**: Compile assets for production:
  ```bash
  npm run build
  ```
- **Optimization**: Run Laravel optimizations:
  ```bash
  php artisan config:cache
  php artisan route:cache
  php artisan view:cache
  ```

## Folder Structure
```
cooltech-solutions/
├── app/                  # Laravel application logic (Models, Controllers, etc.)
├── bootstrap/            # Laravel bootstrap files
├── config/               # Configuration files
├── database/             # Migrations, seeders, and factories
├── public/               # Publicly accessible files (CSS, JS, images)
├── resources/            # Blade templates, raw CSS/JS, and other assets
│   ├── css/             # CSS files
│   ├── js/              # JavaScript files
│   └── views/           # Blade templates
├── routes/               # Web and API routes
├── storage/              # Logs, cached files, and file uploads
├── vendor/               # Composer dependencies
├── .env                  # Environment configuration
└── README.md             # Project documentation
```

## Contributing
1. Fork the repository.
2. Create a new branch (`git checkout -b feature-name`).
3. Commit changes (`git commit -m "Add feature-name"`).
4. Push to the branch (`git push origin feature-name`).
5. Open a pull request.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

## Contact
For questions or support, contact the CoolTech Solutions team at:
- Email: support@cooltechsolutions.com
- Website: [www.cooltechsolutions.com](https://www.cooltechsolutions.com)