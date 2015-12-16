# Strider Engine
The Open Source Extensible App Engine

by Ryan Rentfro

# NOTES
- This development stack/framework is just at Beta 1 and for testing and research purposes.
- Documentation is coming in the wiki as time goes on.

# INSTALL INSTRUCTIONS
We will be bringing this app to Composer and other loaders once code is stable.

In the meantime if you are ready to use Strider do the following:

Requirements:
PHP 5.4
Node JS

- Run: install.sh - This will install all of the Node JS, Bower, and Grunt Packages
- Run: composer install

(Note: If you can't run composer, download composer.phar with the instructions from Composers website)

- Copy: system/core/example.config.php to system/core/config.php
- Update: Update your settings and save
- Run: Your URL in the browser (localhost/{yourapp} or whatever you've setup.

(Note: You will be in the init app under app/init/controller/init.php)
(Note: You can change all this with the config file if you want, just change it and test it!) 

Documentation is included in source or you can compile it with phpdoc.



Integration Information

Task  | Details
------------- | -------------
Propel2 | Rename system/core/example.propel.php to propel.php and propel is enabled.
Propel2 | Run build.sh to build propel then composer update to update your autoloader


# FEATURE MATRIX
The feature matrix covers the base features we plan to implement.

Task  | Status
------------- | -------------
Traits  | Beta
Interfaces  | Beta
Abstractions  | Beta
Config   | Beta
Globals  | Beta
Controller  | Beta
Model  | Beta
Package  | Beta
Template  | Beta
Validate  | Beta
Convert  | Beta
Event  | Beta
Debug  | Beta
Unit Tests  | Beta

<hr />

# CLASS BLUEPRINTS
Class Blueprints are what we consider to be traits, interfacers, and abstractions.  They define the outline for objects in the system and their base shared functionality.

# Traits
Task  | Status
------------- | -------------
Singleton  | Beta

# Interfaces
Task  | Status
------------- | -------------
Controller  | Beta
Crud Model  | Beta
JSON Model  | Beta
XML Model  | Beta
Event Observer | Beta
 
# Abstractions
Task  | Status
------------- | -------------
Data Store  | Beta
Data Loader  | Beta
Router  | Beta
Event Subject  | Beta

# CONCRETE CLASSES
Concrete classes are the collection of instantiable classes you can use to build your app.

# Config
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta

# Globals
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Interface/Abstraction | Beta
Tests | Beta

# Controller
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Interface/Abstraction | Beta

# Model
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Interface/Abstraction | Beta

# Package
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Tests | Beta

# Template
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Interface/Abstraction | Beta
Tests | Beta

# Validate
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Interface/Abstraction | Beta
Tests | Beta

# Convert
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Tests | Beta

# Event
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta
Interface/Abstraction | Beta

# Debug
Task  | Status
------------- | -------------
Base Class  | Beta
Properties  | Beta
Methods  | Beta

<hr />

# UNIT TESTS
Unit tests are tests built to validate the inner workings of exposed API.

Test  | Status
------------- | -------------
Convert | Beta
Globals | Beta
Package | Beta
Template | Beta
Validate | Beta

# BLACK-BOX TESTS
Examples are also interactive tests. 

Test  | Status
------------- | -------------
