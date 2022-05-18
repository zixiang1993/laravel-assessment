# Laravel-assessment
A simple personal movie review and CRUD Laravel app.

This project was built with Laravel and styled with Bootstrap!

# Introduction
As part of the assessment for Laravel in the Fave Tech Hub program, I was required to make a Laravel app project.
Besides applying what I've learned, I could use any resource online to complete this project. 

I chose to make a personal movie review app with CRUD and pagination features, styled using Bootstrap!

# Features:
CRUD Table
Pagination with Bootstrap

# Reflection
While this attempt is better than the React assessment, it is still learning under trial by fire.
My time estimation was still way off.

Things I could have done better:
- Structure the code better.
- Fully reading documentation of packages before using them.
- Asked people for help earlier if I was stuck or dealt with unfamiliar syntax.


# To run
- Download this project
- Run on your terminal (eg: command prompt or gitbash) and cd to project folder
- Run composer install to install composer dependency
- Rename the '.env.example' file to .env, and change the configuration as per your machine.
- Run your server (eg: using XAMMP which was used for this project), and create a database by the same name as per the .env file.
- Using your terminal, run 'php artisan key:generate' (if there is no key yet) and run 'php artisan migrate'
- Run php artisan db:seed to seed the database with initial data
- run your app with 'php artisan serve'

# Screenshots

Home Page

![image](https://user-images.githubusercontent.com/60967477/169031553-81354075-2ad4-4ab5-96d3-4eae9abc7ee6.png)

About Page

![image](https://user-images.githubusercontent.com/60967477/169031717-ee32b3a3-9ac1-448d-b305-c3dfd47ca3cd.png)

Movie Review Page

![image](https://user-images.githubusercontent.com/60967477/169031814-bc16bd83-e3a2-4bed-bd75-21685e61b814.png)

Add New Movie Review Page

![image](https://user-images.githubusercontent.com/60967477/169031992-9993088e-5a78-467e-9e2b-a724e119f761.png)

View Existing Review Page

![image](https://user-images.githubusercontent.com/60967477/169032387-b2913f81-babc-4b4c-a261-34cd83b1a0ce.png)

Edit Existing Review Page

![image](https://user-images.githubusercontent.com/60967477/169033820-aea5495f-5596-4ad7-ac19-90490c16418c.png)

Note: There is a bug with the movie name not being filled. You'll need to refill the name in, after editing your update. I haven't been able to find the bug yet. 


# Credits:
- Thank you, to Fariz Gaskin for your classes!
- Huge thanks to Sean Christoph Gordon, one of my childhood friends (and now programmer buddy) for hearing my rants sometimes.
- Special thanks to the 1st FaveTech Hub cohort, especially to Akmal. You're an amazing and helpful programmer!
- Another special thanks for Adibah and Aidid for the explainations and help! You know what I mean!
- As always, grateful to Fave for the opportunity to work in the FaveTech Hub program.

# Disclaimer:
This app was made as part my learning and training, and is not optimized well. Additionally, there might be some redundant dependencies that are not used that will be installed, so apologies for that.
