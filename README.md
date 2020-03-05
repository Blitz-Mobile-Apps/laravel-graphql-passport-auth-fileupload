# Laravel Integration With GraphQL
GraphQL is a query language for your API, and a server-side runtime for executing queries by using a type system you define for your data

This is sample laravel project to show you how to integrating Graphql with laravel, In this project we will show a GraphQL project integration with Laravel Lighthouse Package, Passport Authentication, Single file and Multi files Upload Mutations .for full documentation you can check [here](https://github.com/rebing/graphql-laravel) and [Graphql](http://graphql.org/learn)

## Installation

#### Dependencies:
* [Laravel 6.x](https://github.com/laravel/laravel)
* [barryvdh/laravel-cors](https://github.com/barryvdh/laravel-cors)
* [joselfonseca/lighthouse-graphql-passport-auth](https://github.com/joselfonseca/lighthouse-graphql-passport-auth)
* [nuwave/lighthouse](https://github.com/nuwave/lighthouse)
* [mll-lab/laravel-graphql-playground](https://github.com/mll-lab/laravel-graphql-playground)


## Install

#### 1. Clone the source code or create new project.

```shell
git clone https://github.com/Blitz-Mobile-Apps/graphql-passport-auth-fileupload
```
OR
```shell
composer create-project Blitz-Mobile-Apps/graphql-passport-auth-fileupload
```

#### 2. Set the basic config

```shell
cp .env.example .env
```

#### 3. Edit the `.env` file and set the `database` and other config for the system after you copy the `.env`.example file.
&nbsp;
#### 4.  Install the extended package dependency.

Install the `Laravel` extended repositories: 

```shell
composer install
```
#### 5. Run the migration

```shell
php artisan migrate
```
#### 6, Publish vendor for getting configuration files and default schema

```bash
php artisan vendor:publish --provider="Nuwave\Lighthouse\LighthouseServiceProvider" --tag=schema
```
```bash
php artisan vendor:publish --provider="Joselfonseca\LighthouseGraphQLPassport\Providers\LighthouseGraphQLPassportServiceProvider"
```

#### 7, Test and run the application

```bash
 $ php artisan serve
 ```
 ## Contributing

> This is an early phase of an endless possibility. We are eagerly looking for contributions from the community.
> To get started:

### Step 1

- **Option 1**

  - 🍴 Fork this repo!

- **Option 2**
  - 👯 Clone this repo to your local machine using `https://github.com/Blitz-Mobile-Apps/graphql-passport-auth-fileupload`

### Step 2

- **HACK AWAY!** 🔨🔨🔨

### Step 3

- 🔃 Create a new pull request.

---

## Support

Reach out to us at our `Website`: <a href="https://blitzmobileapps.com" target="_blank">`Blitz Mobile Apps`</a>


## License

[![License](http://img.shields.io/:license-mit-blue.svg?style=flat-square)](http://badges.mit-license.org)

- **[MIT license](http://opensource.org/licenses/mit-license.php)**
