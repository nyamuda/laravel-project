<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>




<h1>How to Setup this Laravel Project Locally</h1>

<h2>1. Clone GitHub repo for this project locally</h2>
   <code>git clone linktogithubrepo.com/ projectName</code>

<h2>2. cd into your project</h2> <code>cd projectName</code>

<h2>3. Install Composer Dependencies</h2> <code>composer install</code>

<h2>4. Install NPM Dependencies</h2> <code>npm install</code>

<h2>5. Create a copy of your .env file</h2> <code>cp .env.example .env</code>
    <p>.env files are not generally committed to source control for security reasons. But there is a .env.example which is a template of the .env file that the project expects us to have. So we will make a copy of the .env.example file and create a .env file that we can start to fill out to do things like database configuration in the next few steps.</p>

<h2>6. Generate an app encryption key</h2> <code>php artisan key:generate </code>
   <p>Laravel requires you to have an app encryption key which is generally randomly generated and stored in your .env file. The app will use this encryption key to encode various elements of your application from cookies to password hashes and more.</p>

<h2>7. Create an empty database for our application</h2>
   <p>Create an empty database for your project using the database tools you prefere.g MySQL Workbench, phpMyAdmin</p>
   
<h2>8. In the .env file, add database information to allow Laravel to connect to the database</h2>
    <p>In the .env file fill in the DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD</p>
    
 <h2>9. Migrate the database</h2> <code>php artisan migrate</code>
    
 <h4>That is all you need to get started on this project.</h4>
