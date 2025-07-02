# Patent Analytics API

This project provides a RESTful API for analyzing a patent dataset, including statistical summaries, query filters, and a correlation analysis using Python and PostgreSQL.

The backend is built with Laravel, and the application is containerized using Docker Compose.

---

## ✅ Assignment Checklist

- Used public patent dataset (from Google Patents)  
- Dockerized Laravel + PostgreSQL setup  
- Python for data analysis  
- `/summary`, `/query`, and `/correlation` endpoints  
- Error handling for invalid inputs  
- Postman collection for testing  
- Pushed to GitHub  

---

## 🚀 Features

- Summary statistics of patent data (`/summary`)  
- Query patents by filters like year, assignee (`/query`)  
- Correlation analysis between year and abstract length (`/correlation`)  
- Dockerized Laravel + PostgreSQL environment  
- Python used for analytical tasks (via Symfony Process component)  
- Postman collection provided for testing  
- Logs and error handling enabled  

---

## 🛠️ Tech Stack

- **Laravel** – PHP backend framework  
- **PostgreSQL** – Relational database  
- **Python** – Data analysis with `pandas`, `numpy`  
- **Docker & Docker Compose** – Containerized setup  
- **Postman** – API testing  

---

## ▶️ Steps to Run

### 1. Clone the Repository

```bash
git clone https://github.com/JoeJangam/patent-analytics-assignment-final.git
cd patent-analytics-assignment-final
```

---

### 2. Install Required Software

- [Python](https://www.python.org/downloads/)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/)

> After installing Docker, restart your system.

---

### 3. Environment Setup

- Create a `.env` file by copying from the example:

```bash
cp .env.example .env
```

---

### 4. Docker Execution

Ensure you are in the root folder:

```bash
cd patent-analytics-assignment-final
```

Check Docker version:

```bash
docker --version
```

Start Laravel container:

```bash
docker compose run --rm app bash
```

Inside container, run:

```bash
composer install
```

You’ll see packages like:

```
laravel/sail
laravel/tinker
nesbot/carbon
nunomaduro/collision
```

Exit the container:

```bash
exit
```

Start the services:

```bash
docker compose up -d
```

Run migrations:

```bash
docker compose exec app php artisan migrate
```

---

### 5. Python Setup

Install Python packages inside the container:

```bash
docker exec -it laravel_app python3 --version
docker exec -it laravel_app pip3 install sqlalchemy psycopg2-binary --break-system-packages
```

Load the patent dataset:

```bash
docker exec -it laravel_app python3 load_patents.py
```

(Optional) Get a bash shell inside the container:

```bash
docker exec -it laravel_app bash
```

---

## 🌐 API Endpoints

You can test the following APIs in your browser:

- http://localhost:8000/api/summary  
- http://localhost:8000/api/correlation  
- http://localhost:8000/api/query?patent_year=2020&assignee=OpenAI

---

## 📬 Postman Collection

To test APIs via Postman:

- Import the file: `postman_collection.json` (included in the repo)

---

## 🗄️ Database Config

Refer to your `.env` file for DB credentials and connection info.
