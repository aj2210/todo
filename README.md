 Todo WebApp
A simple app to manage your tasks built with Laravel framework 5.6.
This is very basic Web using Laravel. So that if you are know the basic knowledge of laravel than you can get started with this project and you can easily understand this.

Installation
1- Clone the repository

  git clone https://github.com/abdelaziz321/Agenda-To-do
  
2- change the directory into todo folder

  cd todo

3- install the dependencies by running Composer's install command

  composer install

4- create an environment file

  cp .env.example .env
  
5- edit .env file with appropriate credential for your database server - these parameter(DB_USERNAME, DB_PASSWORD).

6- create a database named e.g todo

7- migrate your database

  php artisan migrate

8- generate the application key.

  php artisan key:generate
  
9- Run the server

  php artisan serve

10- Now go to http://localhost:8000 from your browser.
