# ED Drupal Website Assignment

## Content Index

* [Project Tasks: Part One](#project-tasks-part-one)
* [Project Tasks: Part Two](#project-tasks-part-two)
* [Versions](#versions)

## Project Tasks: Part One

1. [x] Create content types with their respective fields
2. [x] Create the taxonomy
3. [x] Set the navigation (both header and footer)
4. [x] Set the Views to print the content types

Bonus assignment:

* [x] Set the sorting for Views
* [ ] Set the contextual filters Views

### Suggestions for improvements

* [x] Enabled "Telephone" module for phone number and use telephone field in content types
* [x] Set up email field to open in email client
* [x] For social links install, enable and use "Social Media Links Block and Field" modules
* [x] For embed You Tube video install, enable and use "Video" module

## Project Tasks: Part Two

* [x] Set up url aliases for content types
* [x] Create View that show all Firms in the block, with category filter exposed
* [x] Create a new view mode for Firms, and show fields logo and phone number in this view mode
* [x] Create a new basic page, that show Firms block
* [x] Create a new role: "Subscribers", and setup page "/firms" to be accessible only users with this role
* [x] Setup contextual filter for view on page "/firms": Date of firm publish (year)

Bonus assignment:

* [x] Create custom module that will print 'Zdravo' and username in block on path '/pozdrav-korisniku'. If is user
Anonymous don't not allow him access to the page

## Versions

### 1.0.0 - Basic website installation

* Drupal 8.9.11
* Drush 10.3.6
* Admin Toolbar 8.x-2.4, module

### 1.1.0

* Add content types: Firms, Articles, Basic Pages
* Add taxonomy vocabulary: Category, Tags

### 1.2.0

* Set the navigation (both header and footer)
* Set the Views to print the content types (Firms and Articles)
* Add content for testing:
  * a few terms to Category vocabulary
  * a few Firms
  * a few Articles

### 1.2.1

* .gitignore update - Exclude from .gitignore /files/ subfolders: articles, firms and oembed_thumbnail
* Add to repo some web/**/files for testing purpose

### 1.3.0

* Set the sorting for Views (by Authored on and Title)

### 1.4.0 - Suggestions and Improvements

* Enabled "Telephone" module for phone number and use telephone field in content types
* Set up email field to open in email client
* Install and enable "Module Filter" module
* Install, enable and use "Social Media Links Block and Field" modules for social links
* Install, enable and use "Video" module for embed You Tube video

### 1.4.1

* Remove web/sites/*/files from Git

### 1.5.0

* Install and enable modules: "Pathauto", "Chaos Tool Suite" and "Token"
* Set up url aliases for content types (Firms, Articles, Basic pages)

### 1.6.0

* Add '/config/*.zip' to .gitignore
* Created View that show all Firms in the block, with category filter exposed
* Created new view mode for content type Firms: "Basic info". This view mode show fields: log and phone number
* Created new basic page, that show Firms block

### 1.7.0

* Created new role: "Subscribers", and setup page "/firms" to be accessible only users with this role
* Rearanged main menu
* Setup contextual filter for view on page "/firms": Date of firm publish (year)

### 1.8.0

* Created a custom module "Hello User Module" that print 'Zdravo' and username in block on path '/pozdrav-korisniku'. If
 is user Anonymous, don't allow him access to the page

### 1.8.1

* Add block "Helo User Block" to custom module "Hello User Module", that print 'Zdravo' and username in block on path
'/pozdrav-korisniku'. If is user Anonymous, don't allow him access to the page

### 1.8.2

* Set custom module "Helo User Module" to print block "Halo User Block" in page content

### 1.9.0

* Install "Empty Page" module, for pages that only consist of blocks
* Remove route from hello_user.routing.yml
* Add new Empty Page menu callback: /pozdrav-korisniku
* Placed block hello_user_block on route /pozdrav-korisniku
* Gave permission to Authenticated User to access to the pages which are created by Empty Page
* Remove hello_user.routing.yml and HelloUserController.php
