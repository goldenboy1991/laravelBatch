# Laravel BATCH (BULK)
Insert and update batch (bulk) in laravel

# Install
`composer require goldenboy1991/laravel-batch:dev-master`



# Service Provider
file app.php in array providers :

`Goldenboy\LaravelBatch\LaravelBatchServiceProvider::class,`


# Aliases
file app.php in array aliases :

`'Batch' => Goldenboy\LaravelBatch\LaravelBatchFacade::class,`


# Example Update 1

```
$table = 'users';

$value = [
     [
         'id' => 1,
         'status' => 'active',
         'nickname' => 'Mohammad'
     ] ,
     [
         'id' => 5,
         'status' => 'deactive',
         'nickname' => 'Ghanbari'
     ] ,
];

$index = 'id';


Batch::update($table, $value, $index);
```


# Example Update 2

```
$table = 'users';

$value = [
     [
         'id' => 1,
         'status' => 'active'
     ],
     [
         'id' => 5,
         'status' => 'deactive',
         'nickname' => 'Ghanbari'
     ],
     [
         'id' => 10,
         'status' => 'active',
         'date' => Carbon::now()
     ],
     [
         'id' => 11,
         'username' => 'goldenboy'
     ]
];

$index = 'id';

Batch::update($table, $value, $index);
```


# Example Insert

```
$table = 'users';

$columns = [
     'firstName',
     'lastName',
     'email',
     'isActive',
     'status',
];

$values = [
     [
         'Mohammad',
         'Ghanbari',
         'emailSample_1@gmail.com',
         '1',
         '0',
     ] ,
     [
         'Saeed',
         'Mohammadi',
         'emailSample_2@gmail.com',
         '1',
         '0',
     ] ,
     [
         'Avin',
         'Ghanbari',
         'emailSample_3@gmail.com',
         '1',
         '0',
     ] ,
];

$batchSize = 500; // insert 500 (default), 100 minimum rows in one query

$result = Batch::insert($table, $columns, $values, $batchSize);
```

```
// result : false or array

sample array result:
Array
(
    [totalRows]  => 384
    [totalBatch] => 500
    [totalQuery] => 1
)
```
