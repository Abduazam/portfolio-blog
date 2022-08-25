# About the project
Project is made by Abduazam with PHP's Laravel framework. The project is website for make blog site. In the beginning, I wanted to made this project only for my self, but then, I decided to make it public for everyone who want to use. Just download full project and run, it will work well. So, I wrote README for who want to use this project. Before start, read it ^-^

# Blog site description
I have made it's both back and front sides. I can use admin dashboard either.

# Steps to run project
1. git clone https://github.com/Abduazam/blog.git
2. run command in terminal:
   1) php artisan migrate
3. run two spatie commands in terminal: 
   1) php artisan permission:create-role admin 
   
   2) php artisan permission:create-role user
4. to enter dashboard first register (if you cannot find register just write your_domen/register)
5. open database end enter table:
   1) model_has_roles
6. change your role from 2 to 1 (1 admin, 2 user) # in controller has written give user role to who registered, in your first register you will be user, you should change your role in order to enter dashboard
7. enter dashboard by your_domen/admin
8. if you not logged in, it redirect you to login when you want to go dashboard
9. finally you entered dashboard

# Guid to use dashboard
Admin dashboard has made by AdminLTE3. You can add new section how you want by looking adminLte3 grids. There are already 4 section: categories, portfolio, courses, posts. Every section has already tables, and controllers what work well. Every action has writter: Add, edit, show, delete. You can just perform the project. It is so simple.

Category section is integrated with Portfolio section. You can add your portfolio by category.

# Good luck to use!
If you have any questions or suggestion to improve the project contact with me:
    
    mail: mohammedmaxsudov@gmail.com
    tg: https://t.me/abduazamdev
