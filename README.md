# laravel-test

This is a very basic web application, made with PHP and Laravel. It allows users to submit text posts, which are put into a database. A text post must have the value of either "Hello" or "Greetings" or "Bonjour" (case-sensitive) because I don't want people submitting rude expressions to my web application. New posts can only be submitted if there are fewer than 10 posts in the database already.

## Configuring this web application

Make sure you create a `.env` file based on the `.env.example` file in this repo. You should run `php artisan key:generate` to populate the value of the `APP_KEY` variable in the `.env` file.

You should also set a value for the `APP_TIMEZONE` variable. Timestamps of text posts stored in the database by this web application will be shown to users in the timezone denoted by `APP_TIMEZONE`. A list of supported values is here:

https://www.php.net/manual/en/timezones.php
