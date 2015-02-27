## Laravel - how to define and use Eloquent Global Scopes in Laravel 5

Learn how to use Laravel's 5 `GlobalScopes`. More info [softonsofa.com/laravel-how-to-define-and-use-eloquent-global-scopes](http://softonsofa.com/laravel-how-to-define-and-use-eloquent-global-scopes/)


### Usage - 1 minute setup

1. clone the repo with `git clone https://github.com/jarektkaczyk/laravel5-global-scope-example.git`
2. run `composer install` in order to pull all the packages
3. migrate the db (sqlite = no setup required) with `php artisan migrate`
4. seed the db with `php artisan db:seed`
5. run the REPL with `php artisan tinker` and play with the `Post` model:


```
>>> App\Post::toSql();
// default behaviour - scope applied
=> "select * from \"posts\" where \"posts\".\"published\" = ?"

>>> App\Post::withDrafts()->toSql();
// scope removed using static method on the trait
=> "select * from \"posts\""

>>> App\Post::query()->withDrafts()->toSql();
// scope removed using macro on the Eloquent\Builder
=> "select * from \"posts\""

>>> 
```