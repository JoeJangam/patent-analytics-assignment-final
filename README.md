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


### Prerequisites

- Docker
- Docker Compose

##  Docker Setup
```bash
docker-compose up --build
docker-compose exec app php artisan key:generate

## Steps to Run

1. **Clone the repository**:

   ```bash
   git clone https://github.com/JoeJangam/patent-analytics-assignment-final.git
   cd patent-analytics-assignment-final

Softwares to be installed:
https://www.python.org/downloads/
https://getcomposer.org/download/ ( Click on Composer-Setup.exe for windows )
https://www.docker.com/products/docker-desktop/ (Click on Download Docker Desktop)

## Docker Execution

Docker name "laravel_app"
docker-compose up -d
docker exec -it laravel_app bash
docker exec -it laravel_app python3 --version
docker exec -it laravel_app pip3 install sqlalchemy psycopg2-binary --break-system-packages
docker exec -it laravel_app python3 load_patents.py

## Postman Collection
Import the included Postman collection to test all endpoints:

File: postman_collection.json (included in repo)

## DB details
.env (please refer)
