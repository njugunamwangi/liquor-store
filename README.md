## About Project

# Plugins

- [Laravel JetStream](https://jetstream.laravel.com/introduction.html).
- [Activity Logger](https://filamentphp.com/plugins/z3d0x-logger).

# Tech Stack

- [Laravel](https://laravel.com).
- [Livewire](https://livewire.laravel.com).
- [TailwindCSS](https://tailwindcss.com).
- [FilamentPHP V3](https://filamentphp.com).

## Prerequisites

- Admin credentials
```bash
email: admin@ndachi.dev
password: password
```

## Installation
- Clone the repository
```bash
git clone https://github.com/njugunamwangi/laracom.git
```
- On the root of the directory, copy and paste .env.example onto .env and configure the database accordingly
 ```bash
copy .env.example .env
```

- Run migrations and seed the database
```bash
php artisan migrate --seed
```

- Install composer dependencies by running composer install
 ```bash
composer install
```
- Install npm dependencies
```bash
npm install
```

- Generate laravel application key using 
```bash
php artisan key:generate
```

- Run laravel application using 
```bash
php artisan serve
```
- Run application using 
```bash
npm run dev
```

- Storage
```bash
php artisan storage:link
```

## License

[MIT](https://choosealicense.com/licenses/mit/)

