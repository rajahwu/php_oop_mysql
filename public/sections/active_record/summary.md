# active record summary

```txt
active record design pattern
```

* Popular design pattern for using
    databases with OOP

* In-memory objects correspond to
    a single table row

* Object properties match table columns

* Object methods for
    create, read, update, and delete

```php
$customer = new Customer();
$customer->first_name = 'Sally';
$customer->last_name = 'Jones';
$customer->email = 'sally@jones.com';
$customer->save();

$customer = Customer::find_by_email('sally@jones.com');
echo $customer->last_name;
$customer->city = 'Boston';
$customer->save();


```

## crud

```sql
INSERT INTO bicycles (brand, model, year)
VALUES ('Trek', 'Emonda', '2017');

UPDATE bicycles
SET brand='Trek', model='Emonda', year='2017'
WHERE id='1' LIMIT 1;

DELETE bicycles
WHERE id='1' LIMIT 1;

```

## create a record
