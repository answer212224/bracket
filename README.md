<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## First Time Useage:

-   `composer install` (init)

-   `composer dump-autoload` (option)

-   `php artisan migrate:fresh --seed` (to create basic users and prizes and schedules)

-   `php artisan storage:link` (to create the symbolic link)

-   `php artisan queue:work` (to start the queue)

## Deploy using Heroku Git

-   `heroku login`

-   `git push heroku master`

## .env

-   `FACEBOOK_CLIENT_ID=2372897259521583`
-   `FACEBOOK_CLIENT_SECRET=4793e74d4104aa734aa8c2c2de9ad1e5`
-   `FACEBOOK_REDIRECT_URI=http://localhost:8000/facebook/callback`
-   `NBA_UDN_API_KEY=nbaudn2018WithApiKey`

## game id:

-   Game IDs are 10 character strings of the form: AABCCDDDDD
-   ex: `0041900113`
-   ex: AABCCDDDEE
-   AA – League ID: 00 => NBA National Basketball Association
-   B – Season Type: 4 => Post Season
-   CC – Season ID (2 digit): 19 => Games for the 2019-2020 season
-   DDD - Round: 001 => FirstRound
-   EE - indicates the game number within the round, 1-7 for 7 game series: 13
-   ex: `0041900[11]3` - chart will know how to set

<p align="center"><img src="https://upload.cc/i1/2021/01/29/3Qeiz4.jpg" width="400"></p>

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
