show databeses;
##Просмотр бд

use mango;
##Создание бд или открыть бд;

show tables;
##Просмотр существующих таблиц;

db.createCollection("users");
## Создание колекции

db.users.insertMany({
  name: "vas",
  age:20
})
## Создание пользователя

db.users.insertMany([
{name: "vas", age: 20},
])
## Создание пользователя c помощью массива

db.users.find()
## Вывод всех пользователей

db.users.find({name: "vas"})
## Вывод пользоватя vas

db.users.find({$or:[{age: 18},{name: "fsuie"}]})
## Вывод пользоватя оператором ИЛИ с помощью массива

db.users.find().sort({age: 1})
## Сортировка в прямом порядке

db.users.find().sort({age: -1})
## Сортировка в обратном порядке

db.users.find().limit(4)
## Сортировка с помощью лимита

db.users.update(
    {name: "vas"},
    {
      $set: {
        name: "varazdat",
        age: 20
      }
    }
)
## Обновление данных пользователя

db.users.updateMany(
    {},
    {
      $rename: {
        name: "ful",
      }
    }
)
## переименование таблицы

db.users.update(
  {name: "vas"},
  {
    $set: {
      posts: [
        {title: 'js', text: 'what?'},
        {title: 'java', text: 'java top'},
      ]
    }
  }
)
## Создание связи 1:n (один ко многим).
## У одного пользователя может быть много связей
## У многих связей может быть только один пользователь

db.users.findOne(
  {name: "vas"},
  {posts: 1}
)
## Вывод постов у пользователя 

ОПЕРАТОР SQL	MONGODB	ОПИСАНИЕ
<	$lt	меньше
<=	$lte	меньше или равно
>	$gt	больше
>=	$gte	больше или равно
<>	$ne	не равно
NOT	$not	отрицание
EXISTS	$exists	проверка существования поля
OR	$or	или
NOT OR	$nor	не или
RLIKE, REGEXP	$regex	соответствие регулярному выражению
LIKE	$elemMatch	соответствие всех полей вложенного документа
—	$size	соответствие размеру массива
—	$type	соответствие, если поле имеет указанный тип
