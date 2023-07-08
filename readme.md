EDC Website

# Setup:

## Prerequisite:
- PHP version 7.4
- Node version 14.21.2
- NPM version 8.17.0

## Installation:
1. Install Laragon
2. Clone this project
   1. Change Project folder's name to *edc-website.dev*
3. Move project folder to C:\laragon\www
4. Navigate to project folder
5. copy .env.example => .env
6. Run `composer install`
7. Run `npm install`
8. Run `php artisan key:generate`
9. Start laragon, install apache or nginx service
10. Run `npm run watch` for local to build sass and javascript
11. Access http://edc-website.dev on browser
