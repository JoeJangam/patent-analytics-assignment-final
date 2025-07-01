# Patent Analytics API

This project provides a RESTful API for analyzing a patent dataset, including statistical summaries, query filters, and a correlation analysis using Python and PostgreSQL. The backend is built with Laravel, and the application is containerized using Docker Compose.

---
## Assignment Checklist
 Used public patent dataset (from Google Patents)

 Dockerized Laravel + PostgreSQL setup

 Python for data analysis

 /summary, /query, and /correlation endpoints

 Error handling for invalid inputs

 Postman collection for testing

 Pushed to GitHub

##  Features

-  Summary statistics of patent data (`/summary`)
-  Query patents by filters like year, assignee (`/query`)
-  Correlation analysis between year and abstract length (`/correlation`)
-  Dockerized Laravel + PostgreSQL environment
-  Python used for analytical tasks (via Symfony Process component)
-  Postman collection provided for testing
-  Logs and error handling enabled

---

##  Tech Stack

- Laravel (PHP backend framework)
- PostgreSQL (database)
- Python (data analysis with pandas, numpy)
- Docker & Docker Compose
- Postman (for API testing)

## Steps to Run

1. **Clone the repository**:

   ```bash
   git clone https://github.com/JoeJangam/patent-analytics-assignment-final.git
   cd patent-analytics-assignment-final

**Softwares to be installed:**
https://www.python.org/downloads/
https://www.docker.com/products/docker-desktop/ (Click on Download Docker Desktop)
Once Installed,restart the system
Create .env file and copy .env.example to .env file

## Docker Execution (Docker name "laravel_app")
Make sure you are in the right folder
cd patent-analytics-assignment-final and run the following commands:
docker --version
docker compose run --rm app bash
You will redirected to inside the container like this (root@3e0fbaa21d3a:/var/www# )
Now run command : composer install

 laravel/pail ................................................................................................................................ DONE
  laravel/sail ................................................................................................................................ DONE   
  laravel/tinker .............................................................................................................................. DONE   
  nesbot/carbon ............................................................................................................................... DONE   
  nunomaduro/collision ........................................................................................................................ DONE   
  nunomaduro/termwind ......................................................................................................................... DONE  
  
Once it is done, run command **exit**
Come out of the container, run the below command
docker compose up -d
docker compose exec app php artisan migrate
docker exec -it laravel_app python3 --version
docker exec -it laravel_app pip3 install sqlalchemy psycopg2-binary --break-system-packages
docker exec -it laravel_app python3 load_patents.py
docker exec -it laravel_app bash

Open the broswer and validate the API's
1. http://localhost:8000/api/summary
2. http://localhost:8000/api/correlation
3. http://localhost:8000/api/query?patent_year=2020&assignee=OpenAI
   
## Postman Collection
Import the included Postman collection to test all endpoints:

File: postman_collection.json (included in repo)

## DB details
.env (please refer)
