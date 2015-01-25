#!/bin/bash
echo "----------------------------------------------------------------"
echo "Welcome to Strider Engine - We Will Now Build the ORM with Haste"
echo "----------------------------------------------------------------"
echo
echo "================================================================"
echo "Building Propel2 ORM"
echo "================================================================"
php vendor/propel/propel/bin/propel.php sql:build --output-dir="db/"
php vendor/propel/propel/bin/propel.php model:build --output-dir="orm/"
echo "================================================================"
echo "Generating API Documentation into docs/api"
echo "================================================================"
vendor/bin/phpdoc -d system/ -d orm/ -t docs/api/
echo "================================================================"
echo "Jobs Done"
echo "================================================================"