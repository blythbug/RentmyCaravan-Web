Assignment Brief:

You are to assume that the system caters for only to a single user type, in this case ‘caravan
owners’).

The functions of the user type ‘caravan owners’ are given below:
  • A user should be able to register with the system by filling up a registration form.
  • A user should be able to login to the system by providing a combination of username and password,
  which was setup by the user during registration.

Once logged in a user should land to welcome page and be able to;
  o Add details of a caravan to the system by completing an add caravan details form.
  o View the list caravans added by the user to the system.
  o Edit the details of a particular caravan.
  o Delete a caravan from the system.
  
#CLIENT SIDE CHECKLIST

[] A welcome page with the option to login to the system for registered users, and a link to a
registration page to allow new user registration.
a. You may design this to display the latest caravans posted by the users to make the
welcome page attractive.

[] A registration page to register new users (caravan owners). The registration page should
consist of a range of HTML form elements, matching the different input fields.
The registration form should contain appropriate client-side validations using JavaScript. Refer
to the structure of the ‘users’ table given below to extract the details required for the user
registration form.

[] Add caravan page; The caravan owners should be able to add the details of a caravan to the
system. You should refer to the structure of the ‘caravan_details’ table given below to identify the
details required for the caravan details form. The caravan details must include images and may
contain any other multimedia elements such as video clips etc.

[] Caravan list view page; to view all previously uploaded caravans.

[] Caravan summary page: Users should be able to select a particular caravan (from the caravan
list view) and get detailed descriptions, images or videos available for the caravan.

[] Caravan edit page: Users should be able to edit the details of a caravan uploaded by that user.

[] Delete caravan function: The users should be able to delete a caravan added by that user.

[] About page. About page should give a description of the website, and a description of the
developer

#SERVER SIDE CHECKLIST

[] Functionality to perform user registration. The information gathered from the registration page
should be verified, checked for errors and saved in the “users” table in the MySQL database.

[] Functionality to insert caravan details. The information gathered from the caravan details page
should be verified, checked for errors and saved in the “vehicle_detail” table in the MySQL
database.

[] Functionality to perform user login. User login details submitted through the login form should
be verified with the “users” Table. A PHP user session should be initiated and maintained until
the user logs out from the system. The current session should be visible across all pages with
the option to logout from the session.

[] Log out functionality to clear the current session, enabling a new user to login to the system.

[] Server-side functions to retrieve a list of caravans uploaded by logged in user. This function
should support the caravan list view page, and caravan summary page.

[] Server-side functions to edit and delete the details of a caravan uploaded by a particular logged
in user.

