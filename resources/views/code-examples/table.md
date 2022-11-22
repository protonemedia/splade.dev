```php
SpladeTable::for(User::class)
    ->column('name')
    ->column('email')
    ->withGlobalSearch(columns: ['name', 'email'])
    ->export(
        label: 'CSV export',
        filename: 'users.csv',
        type: Excel::CSV
    );
    ->paginate(15);
```