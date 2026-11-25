# FoodFusion

PHP + MySQL + JavaScript culinary community application.

## XAMPP setup
1. Put `FoodFusion` in `C:\xampp\htdocs\`.
2. Start Apache and MySQL.
3. Open phpMyAdmin.
4. Import `database/foodfusion.sql`.
5. Check database settings in `config/config.php`.
6. Open `http://localhost/FoodFusion/`.

## Test admin
Email: `admin@foodfusion.test`
Password: `Admin@12345`

Change this password before real deployment.

## Main features
Registration, secure password hashing, session login, 3 failed attempts / 3 minute lockout, recipe search and filters, community submissions, admin approval, favourites, comments, events, news, resources, educational renewable-energy content, contact form, cookie consent, responsive Bootstrap UI, CSRF tokens, PDO prepared statements and activity tracking.

## Production hardening
Before public deployment, add HTTPS, environment variables for secrets, email verification, password reset, stronger rate limiting, production upload handling, CSP, security headers, logging and monitoring.
