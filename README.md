# Steps:
# 1. HTML Code (get_value.html):
This code creates a basic HTML form where the user can enter a value. The form has an input field named "value" and a submit button. When the user submits the form, it sends a GET request to the "store_value.php" file.

# 2. PHP Code (store_value.php):
This code handles the GET request sent by the form submission. It connects to a MySQL database using the provided credentials and inserts the value submitted by the user into a table named "humidity_data". If the insertion is successful, it redirects the user to the "get_sensor_data.php" file with the submitted value as a GET parameter.

# 3. PHP Code (get_sensor_data.php):
This code retrieves the stored humidity values from the "humidity_data" table in the MySQL database. It connects to the database using the provided credentials and executes a SELECT query to fetch the records. If there are records found, it loops over each record and displays the ID and humidity value. If no records are found, it displays a message indicating that no records were found.

The combined workflow starts with the user entering a value in the form on "get_value.html". Upon submission, the value is stored in the database using "store_value.php". Finally, the user can view the stored humidity values by accessing "get_sensor_data.php", which retrieves and displays the records from the database.
To create a page that receives a variable of type GET and stores it in a database, follow these steps:

Step 1: Create a form in HTML to submit the value via GET method. Here's an example:
```linux
sens.html
```
# Create a database table to store the humidity values:
_Use PHPMyAdmin or run SQL commands to create a table in your database.
For example, you can create a table named "humidity_data" with a column called "humidity_value".

```linux
sql
   CREATE TABLE humidity_data (
     id INT AUTO_INCREMENT PRIMARY KEY,
     humidity_value VARCHAR(255) NOT NULL
   );

```

![web4-2](https://github.com/laylaAm/web_NLP-4/assets/139586277/5860b133-40c5-493c-b23a-999ece9c72e0)

# Make a PHP page to display the stored value:

```linux
store_value1.php
```

![web4-3](https://github.com/laylaAm/web_NLP-4/assets/139586277/199f8d09-083b-4057-a3aa-200de9305380)
