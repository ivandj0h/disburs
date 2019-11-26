## Disburs Services

### About Disburs Services
This is a Small Services that Connected to 3rd party is called slightly-big Flip.
The purpose of this Services is to  send the disbursement data to the 3rd party API (slightly-big Flip)
and then Save the detailed data about the disbursement from the 3rd party response in the local database

    1.  This Services was developed with MVC pattern and OOP concept and it wasn't use any Framework.
    2.  This Services already included Regular expressions, Router & Handling databases with PDO.

As most MVC frameworks, this project flows through public/index.php and loads the correspondant page base on the URL and here is the Project Structure

    disburs/
        config/             # Database credentials, utility functions, constants used frequently
        data/               # SQL database file
        public/             # Accessible files. What final users see
            css/            # Compiled css file
            js/             # Compiled javascript file
            index.php       # Starting point for the entire app
        src/                # Application source code
            app/            # Router class, routes.php
            controllers/    # Controller classes
            models/         # Model classes
            views/          # Views
            .htaccess       # Make src/ unaccessible for users
        vendor/             # Composer files, autoloader !ignored
        .gitignore          # Files/folders to be ignored by version control
        .htaccess           # Redirect everything to public/ folder
        composer.json       # Composer dependency file

