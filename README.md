<p align="center"><img src=".github/logo.png" width="200" alt="FreelanceHours Logo"></a></p>

<p align="center">
  <img alt="PHP version" src="https://img.shields.io/static/v1?label=php&message=8.3&color=18181B&labelColor=5354FD">
    <img alt="Laravel version" src="https://img.shields.io/static/v1?label=laravel&message=11.9&color=18181B&labelColor=5354FD">
</p>

FreelanceHours is an application developed in PHP, Laravel and Livewire, where freelancers can submit proposals for hours they can contribute to a given project.

Developed during a Rocketseat event.

<br>

<p align="center">
  <img alt="Preview do projeto desenvolvido." src=".github/preview.png" width="80%">
</p>

## Tech stack
- [**PHP**](https://www.php.net/): Programming language used;
- [**Laravel**](https://laravel.com/): PHP framework used for the structure and organization of the project;
- [**Livewire**](https://laravel-livewire.com/): Used to create dynamic and reactive interfaces without leaving Laravel;
- [**Tailwind**](https://tailwindcss.com/): CSS framework that facilitates the development of modern and responsive interfaces.

## How to run
- `cd freelance-hours`
- Setup the .env file
- `composer install`
- `npm install`
- `php artisan serve`
- `npm run dev`

## Commands
`php artisan migrate:fresh` -> Drop old tables and create new ones

`php artisan db:seed` -> Populate database with fake data

`php artisan schedule:work` -> Starts queued tasks
