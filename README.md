# gabriel-cinema-project


## Table of Contents
1. [General Info]
2. [Technologies]
3. [Installation]


##GENERAL INFO
===========================================================================================

Film Booking application that allows users to book their favourite show.
Users can select different time slots for a particular show.
Users can cancel to show 1 hour prior to the commencement of the show.
Users may also not be able to book if the available theatre seats have been fully booked.
A show can only accommodate a maximum of 30 bookings, if a user tries to book tickets exceeding the maximum limit, they will receive a response of how many tickets are available to book for that show.
Additionally, for admin testing purposes, a functionality to tweak dates to test logic has been enabled.

##TECHNOLOGIES
===========================================================================================
The Cinema app is build using the following technologies:

Bootstrap v5.0.2 for Frontend development.
Bootstrap is easy to use, builds responsive websites that adapts to any portable device.
The Bootstrap framework has been used to use its powerful features to speed up the frontend development, by utilizing, its components that includes but not limited to, modals for popups, buttons, and accordion.

This cinema app uses Laravel as a backend Framework.
The Laravel framework help speed up the development process with a reusable and clean code.
Using the framework in this application has made it easy enhance the performance of the application using Models.
Utilizing this framework makes it easy to build a cinema application that is bug free and easy to maintain.
This cinema app incorporates MySQL as a database storage system.

##INSTALLATION
===========================================================================================
Requirements:

1. PHP Version 7.3 and above. 
2. MySQL Database.

Installation:

1. Clone project from Github.
2. Run Composer Update
3. Create a Database in MySQL
4. Update the following value on the .evn file.
------------------------------------------------
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your-database-name
DB_USERNAME=your-database-username
DB_PASSWORD=your-database-password
------------------------------------------------
5. Run migrations: php artisan migrate
6. Run database seed: php artisan db:seed

Once the above steps have been done, the application should be ready to be used.