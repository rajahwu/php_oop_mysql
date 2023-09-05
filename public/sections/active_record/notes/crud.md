# create read update destory

```sql
INSERT INTO bicycles (brand, model, year)
VALUES ('Trek', 'Emonda', '2017');

UPDATE bicycles
SET brand='Trek', model='Emonda', year='2017'
WHERE id='1' LIMIT 1;

DELETE bicycles
WHERE id='1' LIMIT 1;

```
