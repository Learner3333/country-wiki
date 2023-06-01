<h1  align="center" >Country Source Engine</h1>

  <p align="center">
    Discover About Countries !   </p>


<br> <br>



## About The Project

- It's an web application using PHP and MySQL.

- It can fetch and display country information based on user input.

- This project is created as a part of an assignment.

- Create and update operations performed in MySQL Databases.



<br/>


<bt/>


## Technology Used


| Frontend                          | Backend                                 |
|-----------------------------------|-----------------------------------------|
| HTML5                             | php                                     |
| CSS3                              | MySQL Databases                        |
| Bootstrap 5                       | xampp                                  |
|                                   | Apache server                          |
|                                   |                                       |


 

### API used 

- __REST Countries API__

- Allow access to country data based on different search criteria. 

- https://restcountries.com

#### The API endpoints 

- "https://restcountries.com/v3.1/all"
- "https://restcountries.com/v3.1/name/{name}"
- "https://restcountries.com/v3.1/alpha/{code}" 



<br/>

## How to Use it

- Navigate to the homepage or All countries page to see all the countries list.

- Users can click on the listed countries to see more details about countries.

- Each country is represented by its name and code.

- Users can search by country code and search by country name.


<br/>

## Features

- __Display List:__  Display a list of all countries retrieved from the API.

- __Country Details:__ When a user selects a country from the list, the system 
displays the detailed information about that country. 
The information is look like: 
a. Name
b. Capital
c. Population
d. Area
e. Borders (if any)
f. Languages spoken

### Search Functionality: The user interface should provide two search options:

- __Search by Name:__ Allow users to search for a country by its name. When a
user enters a country name in the search field and submits the form, the
system should display a filtered list of countries matching the search query.
Clicking on a country in the filtered list should display its details.

- __Search by Code:__ Allow users to search for a country by its code. When a
user enters a country code in the search field and submits the form, the
system should fetch the country details using the corresponding API
endpoint and display the information.


### Database Integration
- We need to store the search keyword in the database.
- For example, if a user search 
India then should get recorded in the database with the count.



<br/> 


## Installation

### Prerequisites

- [XAMPP](https://www.apachefriends.org/)
- Apache distribution containing MariaDB, PHP, and Perl.
- Free, Open-source.

<br/>

### Steps:

1. Clone the repository: `git clone <repository-url>` 
2. Extract and rename the folder to country-wiki (if folder's name changed)
3. Navigate to the directory: `/opt/lampp/htdocs` 
4. Copy or paste the country-wiki folder to : `/opt/lampp/htdocs`
5. Now start the server » `sudo /opt/lampp/lampp start` 
6. Open browser and open the localhost link `http://localhost/phpmyadmin`
7. Create Database named `country-wiki` in xampp.
8. Export the `dbsCreate.sql` which you will find in the country-wiki folder.
6. Open browser and open the localhost link `http://localhost/country-wiki/home.php` 
- NOTE ->  On different systems localhost can run on different ports.
- And connect to the internet so the Bootstraps cdn link can load.



---


