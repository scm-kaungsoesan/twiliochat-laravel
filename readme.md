# twiliochat-laravel
[![Build Status](https://github.com/scm-kaungsoesan/twiliochat-laravel)]

Laravel implementation of Twilio Chat

### Run the application

1. Clone the repository and `cd` into it

1. Install the application's dependencies with [Composer](https://getcomposer.org/)

   ```bash
   composer install
   composer require twilio/sdk
   ```
1. Copy the sample configuration file and edit it to match your configuration

   ```bash
   copy .env.example .env
   ```

  You can find your `TWILIO_ACCOUNT_SID` in your
  [Twilio Account Settings](https://www.twilio.com/user/account/settings).
  You need to create an API key that will give you a `TWILIO_API_KEY` and a
  `TWILIO_API_SECRET`. For that purpose click
  [here](https://www.twilio.com/console/dev-tools/api-keys).

  For `TWILIO_CHAT_SERVICE_SID` you can click [here](https://www.twilio.com/console/chat/dashboard),
  where you must create a Programmable Chat Service. When the service is created you'll
  have access to the service's SID.

1. Generate an `APP_KEY`

   ```bash
   php artisan key:generate
   ```

1. Run the application using Artisan

  ```bash
  php artisan serve
  ```

  Now you can access the application at `http://localhost:8000`.

  ##Error Solving Method##
  If Error "Failed to fetch the access token with error:[object object]" found.
  Rerun
  ```bash
   composer update
   composer require twilio/sdk
   ```

## Expose your localhost to the internet

If you want your chat application to be reachable publicly in the internet, you can use
a service like [ngrok](https://ngrok.com/).

1. Expose the application to the wider Internet

   ```bash
   ngrok http 8000
   ```

  It is `artisan serve` default behavior to use `http://localhost:8000` when
  running the application. This means that the ip addresses where your app will be
  reachable on you local machine will vary depending on the operating system.

  The most common scenario, is that your app will be reachable through address
  `http://127.0.0.1:8000`, and this is important because ngrok creates the
  tunnel using only that address. So, if `http://127.0.0.1:8000` is not reachable
  in your local machine when you run the app, you must tell artisan to use an
  address, like this:

  ```bash
  php artisan serve --host=127.0.0.1
  ```

### Dependencies

This application uses this Twilio helper library
* [twilio-php](https://www.twilio.com/docs/php/install)
