# About the project
My first project in Laravel framework. The project is website for make blog site. In the beginning, I wanted to made this project only for my self, but then, I decided to make it public for everyone who want to use. Just download full project and run, it will work well. So, I wrote README for who want to use this project. Before start, read it ^-^

# Blog site description
I have made it's both back and front sides. I can use admin dashboard either.

# Steps to run project
1. download by cloning

    <pre>git clone https://github.com/Abduazam/blog.git</pre>

3. open project and run comment in terminal:

    <pre>php artisan serve</pre>

4. run command in terminal:
   
   <pre>php artisan migrate</pre>

4. run two spatie commands in terminal: 
   
   <pre>php artisan permission:create-role admin</pre> 
   
   
   <pre>php artisan permission:create-role user</pre>

5. to enter dashboard first register (if you cannot find register just write <b>your_domen/register</b> or in localhost: <b>http://127.0.0.1:8000/register</b>)
6. open database end enter table:
 
   <pre>model_has_roles</pre>

7. change your role from <b>2</b> to <b>1</b> (1 admin, 2 user) # in controller has written give user role to who registered, in your first register you will be user, you should change your role in order to enter dashboard
8. enter dashboard by <b>your_domen/admin</b>
9. if you not logged in, it redirect you to login when you want to go dashboard
10. finally you entered dashboard

# Guid to use dashboard
Admin dashboard has made by AdminLTE3. You can add new section how you want by looking adminLte3 grids. There are already 4 section: categories, portfolio, courses, posts. Every section has already tables, and controllers what work well. Every action has writter: Add, edit, show, delete. You can just perform the project. It is so simple.

Category section is integrated with Portfolio section. You can add your portfolio by category.

# Good luck to use!
If you have any questions or suggestion to improve the project contact with me:
    
mail: mohammedmaxsudov@gmail.com

tg: https://t.me/abduazamdev
