# Strider Engine
The Open Source Extensible App Engine

by Ryan Rentfro & Isaac Mendoza

# INSTALL INSTRUCTIONS
We will be bringing this app to Composer and other loaders once code is stable.

In the meantime if you are ready to use Strider do the following:

Requirements:
PHP 5.4
Node JS

- Run: install.sh - This will install all of the Node JS, Bower, and Grunt Packages
- Run: composer install

(Note: If you can't run composer, download composer.phar with the instructions from Composers website)

- Copy: example.config.php to config.php
- Update: Update your settings and save
- Run: Your URL in the browser (localhost/{yourapp} or whatever you've setup.

(Note: You will be in the init app under app/init/controller/init.php)
(Note: You can change all this with the config file if you want, just change it and test it!) 


# FEATURE MATRIX
The feature matrix covers the base features we plan to implement.

Task  | Status
------------- | -------------
Traits  | Alpha
Interfaces  | Alpha
Abstractions  | Alpha
Config   | Alpha
Globals  | Alpha
Controller  | Alpha
Model  | Alpha
Package  | Alpha
Template  | Alpha
Validate  | Alpha
Convert  | Alpha
Event  | Alpha
Debug  | Alpha
Unit Tests  | In Progress

<hr />

# CLASS BLUEPRINTS
Class Blueprints are what we consider to be traits, interfacers, and abstractions.  They define the outline for objects in the system and their base shared functionality.

# Traits
Task  | Status
------------- | -------------
Singleton  | Alpha

# Interfaces
Task  | Status
------------- | -------------
Controller  | Alpha
Crud Model  | In Progress
JSON Model  | In Progress
XML Model  | In Progress
Event Observer | Alpha
 
# Abstractions
Task  | Status
------------- | -------------
Data Store  | Alpha
Data Loader  | In Progress
Router  | Alpha
Event Subject  | Alpha

# CONCRETE CLASSES
Concrete classes are the collection of instantiable classes you can use to build your app.

# Config
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | In Progress
Tests | In Progress

# Globals
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | Alpha
Tests | In Progress

# Controller
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | Alpha
Tests | In Progress

# Model
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | Alpha
Tests | In Progress

# Package
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | In Progress
Tests | In Progress

# Template
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | Alpha
Tests | In Progress

# Validate
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | Alpha
Tests | In Progress

# Convert
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | In Progress
Tests | In Progress

# Event
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | Alpha
Tests | In Progress

# Debug
Task  | Status
------------- | -------------
Base Class  | Alpha
Properties  | Alpha
Methods  | Alpha
Interface/Abstraction | In Progress
Tests | In Progress

<hr />

# UNIT TESTS
Unit tests are tests built to validate the inner workings of exposed API.

Test  | Status
------------- | -------------
Convert | Alpha
Globals | Alpha
Package | In Progress
Template | In Progress
Validate | Alpha


# BLACK-BOX TESTS
Examples are also interactive tests. 

Test  | Status
------------- | -------------