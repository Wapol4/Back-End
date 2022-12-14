1. Create Laravel project
    - composer create-project laravel/laravel="8.6.2" Laracamp

2. Migration database:
    Camp Table
    - php artisan make:migration create_table_camps --table=camps
    - php artisan make:model Camp

    Camp Benefits
    // Create model and migration
    - php artisan make:model CampBenefit -m
    // Rollback
    - php artisan migrate:rollback