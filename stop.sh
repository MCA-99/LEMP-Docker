#!/bin/bash

# Stop the project
echo "✔ ··· Stopping project"
docker-compose down

# Change prestashop/ db/ folders permissions
echo "✔ ... Changing permissions"
sudo chown -R 1000:1000 db/