1. composer update
2. php artisan migrate
SQL file is located in folder database

3. /api/register/
Fill the name, email, password, confirm_password

4. Save the token
With this token you can start

5. php artisan serve

6. Routes
GET
users
posts
posts/{id}/comments

GET with Sort
posts/sort
posts/{id}/comments/sort
users/sort

POST/STORE
posts/store
posts/{id}/comment/store
iser/store

PATCH
posts/{id}/ipdate
user/{id}/update
comment/{id}/update

DELETE
posts/{id}/delete
posts/comment/{id}/delete
user/{id}/delete
