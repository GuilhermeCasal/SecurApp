#!/bin/bash

echo "Running app..."

# setup permissions for webapp files
sudo chmod -R a+rwx ${PWD}/app
sudo chmod -R a+rwx ${PWD}/app_sec

# setup docker container
sudo docker build -t webapp .
sudo docker run -dti --name web -p 81:80 webapp
