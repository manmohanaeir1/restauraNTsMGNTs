php artisan make:controler HomeController

Authentication {

        composer require laravel/jetstream
        php artisan jetstream:install livewire
            install node js 
                node -v => check version of node / check inatalled or not
                    ->npm install
                    ->npm run dev
        php artisan migrate
        php artisan migrate:refresh => for change table fields. add/remove fields

        for making user login dashboard:
        App/Providers/RouteServiceProvider
            change => public const HOME = '/dashboard'; onto public const HOME = '/home';

        }

day3:
 1. adding admin and normal user login 
 2. Set up admin pannel template
  