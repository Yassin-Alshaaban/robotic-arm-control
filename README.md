# robotic arm-control
This project is a control interface that contains 6 sliders with a value ranging from 1 to 180. These values ​​are automatically stored in the SQL database when you click the save button.

And the transmission is verified when the play button is pressed and this project was designed on several files:

1- INDEX.PHP which is the main interface file that connects everything and gives you full control

2- style.css, which carries all the formatting, colors, fonts, and alignment method for the elements

2- Action.js It processes the value of sliders into variables and displays them next to each slider on the main page

2- final.php, which is a file that takes the variable values ​​of the engines from the main page and stores them in the database when you click on the save button. It also updates the previous data of the database every time you press save

4- myform.sql which is the database file with utf8_general_ci encoding, consisting of three columns id /value/name as shown in the attached images

*Note: In order for the project to work for you correctly, save the entire project folder in this path C:\xampp\htdocs And you have to import the database through phpMyAdmin Then through the browser, enter localhost/NameFolder/

