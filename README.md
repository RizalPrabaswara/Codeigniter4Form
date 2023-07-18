# CodeIgniter 4 Application Starter

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure.
More information can be found at the [official site](https://codeigniter.com).

This repository holds a composer-installable app starter.
It has been built from the
[development repository](https://github.com/codeigniter4/CodeIgniter4).

More information about the plans for version 4 can be found in [CodeIgniter 4](https://forum.codeigniter.com/forumdisplay.php?fid=28) on the forums.

The user guide corresponding to the latest version of the framework can be found
[here](https://codeigniter4.github.io/userguide/).

## Installation & updates

`composer create-project codeigniter4/appstarter` then `composer update` whenever
there is a new release of the framework.

When updating, check the release notes to see if there are any changes you might need to apply
to your `app` folder. The affected files can be copied or merged from
`vendor/codeigniter4/framework/app`.

## Setup

Copy `env` to `.env` and tailor for your app, specifically the baseURL
and any database settings.

## Important Change with index.php

`index.php` is no longer in the root of the project! It has been moved inside the *public* folder,
for better security and separation of components.

This means that you should configure your web server to "point" to your project's *public* folder, and
not to the project root. A better practice would be to configure a virtual host to point there. A poor practice would be to point your web server to the project root and expect to enter *public/...*, as the rest of your logic and the
framework are exposed.

**Please** read the user guide for a better explanation of how CI4 works!

## Repository Management

We use GitHub issues, in our main repository, to track **BUGS** and to track approved **DEVELOPMENT** work packages.
We use our [forum](http://forum.codeigniter.com) to provide SUPPORT and to discuss
FEATURE REQUESTS.

This repository is a "distribution" one, built by our release preparation script.
Problems with it can be raised on our forum, or as issues in the main repository.

## Server Requirements

PHP version 7.4 or higher is required, with the following extensions installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Additionally, make sure that the following extensions are enabled in your PHP:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library
# Codeigniter4Form

This is my Form with validation in Codeigniter 4. 
Inside the form there are :
<ul>
  <li>Button For Upload Picture and Preview The Picture</li>
  <li>Dropdown list which the value get from database</li>
  <li>Multiple select list which the value get from database using select2</li>
  <li>Dependant dropdown List using AJax (Example : Country->City->District)</li>
  <li>Some Validation rules for each input and the error message</li>
  <li>Database migration and seeder which include foreign key relations</li>
</ul>
<br/>
<p>The Error Messsage</p>
![Screenshot_30](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/04be5d04-07cd-4f96-b875-9a3abaaa3bea)
<br/>
<p>The Dropdown List and Multiple Select</p> <br/>
the dropdown <br/>
![Screenshot_32](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/0e73b5b9-57b5-44e9-b89a-20400bac2925)
![Screenshot_31](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/50bd25b8-6270-4f05-b609-1c73e6d8cca0)
the multiple select <br/>
![Screenshot_34](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/26f9c420-791a-4255-a7ef-6e6421cc45ca)
![Screenshot_33](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/24c0c602-085a-46ad-a99c-1eee7b778147)

<p>Dependant dropdown List using AJax</p> <br/>
![Screenshot_37](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/09828350-1a4e-4263-ad86-e3dad5ddb8d1)
![Screenshot_36](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/c41da259-62b5-4992-9222-4ab8bc049d94)
![Screenshot_35](https://github.com/RizalPrabaswara/Codeigniter4Form/assets/77397827/9fb7f2fe-9ca2-4d64-acab-44592c661691)
<br/>
Hope my project can help you guys who in need. Thank You
