# ED Drupal Website Assignment

## Table of Contents

* [Project tasks](#project-tasks)
* [Installation notes](#basic-installation-notes)
* [Versions](#versions)

## Project Tasks

1. [x] Create content types with their respective fields
2. [x] Create the taxonomy
3. [x] Set the navigation (both header and footer)
4. [x] Set the Views to print the content types
5. [ ] Bonus assignment: Set the contextual filters and sorting for Views

## Basic Installation Notes

* Get code from repository

```bash
 git clone git@github.com:draganjancikin/ed-drupal-website.git
```

* Get required packages

```bash
 composer install
```

* Install drupal website

```bash
 drush site:install --site-name=<site_name> --db-url=mysql://<mysql_user_name>:<mysql_user_password>@<server_name>:3306/<data_base_name> --account-name=<user_1_name> --account-pass=<user_1_password>
```

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
