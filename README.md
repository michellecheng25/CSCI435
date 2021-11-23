# CSCI435

### Project Description:

The goal of this project is to create a way for users to save money when buying a product online. For a given item, using information from numerous online websites, our system will list possible options for the user to acquire the item in a way that provides the best quality goods at the cheapest price. The system presents information about the item options such as their prices, ratings, vendors, and websites.
Features:

- Searching for an item will list out several online vendors/stores that sell the item and will list:
- Vendor
- Vendor website
- Vendor country
- Item
- Prices
- Ratings
- Website links

### Users:

This project targets online shoppers who are looking to save money. Users must provide an item to look up. After looking through all the options, the user can click on the provided website links and place their orders directly to the online store/vendor.


### How to Use:
- Installed Mysql and have the proper database.
- Download PHP if you don't already have it.
- Go to project directory in terminal.
- Use the command: php -S 127.0.0.1:[Port number] e.g. php -S 127.0.0.1:8000 then go to the link: http://127.0.0.1:8000
- Make sure the variables (servername, username, password, database) are all correct. Note: Username and password should be the same as the mysql username and password.

### Example SQL query:

SELECT \* FROM items
INNER JOIN vendors
ON items.vendor = vendors.vendor
WHERE vendors.region = 'Austria'
AND items.price > 20 AND items.price < 30
ORDER BY items.price ASC
;
