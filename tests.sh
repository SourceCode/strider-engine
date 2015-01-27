#!/bin/bash
echo "----------------------------------------------------------------"
echo "Welcome to Strider Engine - We Will Now Run The Unit Tests"
echo "----------------------------------------------------------------"
echo
echo "================================================================"
echo "System Unit Tests"
echo "================================================================"
vendor/bin/phpunit --bootstrap vendor/autoload.php  tests/