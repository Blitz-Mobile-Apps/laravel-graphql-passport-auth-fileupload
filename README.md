# graphql-passport-auth-fileupload
It is a GraphQL project with Passport Authentication and Single and Multi File Upload functionality.

1. Create Laravel project and install this package

	composer require nuwave/lighthouse laravel/passport joselfonseca/lighthouse-graphql-passport-auth

2. Migrate tables and then install passport

3. Publish vendor for getting configuration files and default schema

	php artisan vendor:publish --provider="Nuwave\Lighthouse\LighthouseServiceProvider" --tag=schema

	php artisan vendor:publish --provider="Joselfonseca\LighthouseGraphQLPassport\Providers\LighthouseGraphQLPassportServiceProvider"

4. To test and run our GraphQL mutations, we need to install graphql-playground run below command

	 composer require mll-lab/laravel-graphql-playground 

5. Test Mutations and queries.


