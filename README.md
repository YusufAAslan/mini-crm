##  Mini CRM 

Mini CRM is a Laravel-based project designed to manage employees and their tasks using PostgreSQL. It allows you to create, update, and retrieve employees and tasks through RESTful API endpoints.
## VIA
## Laravel Framework 11.37.0
## PHP 8.2.12

##  Features 
   - List all employees
   - List tasks assigned to a specific employee
   - Create a new task
   - Update a task's title or status
   - Mark a task as completed


## Table of Contents 
- Project Description
- Setup Instructions
- API Endpoints
- Postman Collection
- Screenshots 

-------------------------------------------------------

## Setup Instructions 

##  Prerequisites 
   - PHP 8.1 or later
   - Composer
   - PostgreSQL
   - Postman (optional, for testing)


## Installation 
1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd mini-crm
2. Install dependencies:
composer install

3. Configure the .env file:
   
   DB_CONNECTION=pgsql
   DB_HOST=127.0.0.1
   DB_PORT=5432
   DB_DATABASE=mini_crm
   DB_USERNAME=your_username
   DB_PASSWORD=your_password

5. Run migrations and seeders:
   php artisan migrate --seed

6. php artisan serve

7. Your API will be accessible at:
http://127.0.0.1:8000/api


## Postman Collection:


Importing the Collection
1.Open Postman.
2.Click on Import in the top left corner.
3.Choose the file Mini CRM API.postman_collection.json located in the repository.
4.Test all endpoints using the imported collection.


## Endpoints:


1. List Employees

URL: /api/employees
Method: GET

Response:

[
    {
        "id": 1,
        "name": "John Doe",
        "email": "john.doe@example.com",
        "created_at": "2025-01-07T22:41:47.000000Z",
        "updated_at": "2025-01-07T22:41:47.000000Z"
    }
]

2. List Tasks for an Employee    DONT FORGET TO REPLACE {id} with real id

URL: /api/employees/{id}/tasks
Method: GET
Response:


[
    {
        "id": 1,
        "employee_id": 1,
        "title": "Complete report",
        "status": "pending",
        "created_at": "2025-01-07T22:51:44.000000Z",
        "updated_at": "2025-01-07T22:51:44.000000Z"
   }
]


3. Add a New Task

URL: /api/tasks
Method: POST
Request Body:


{
    "employee_id": 1,
    "title": "Prepare presentation",
    "status": "in_progress"
}
Response:


{
    "id": 2,
    "employee_id": 1,
    "title": "Prepare presentation",
    "status": "in_progress",
    "created_at": "2025-01-08T00:00:00.000000Z",
    "updated_at": "2025-01-08T00:00:00.000000Z"
}

4. Update a Task

URL: /api/tasks/{id}
Method: PUT
Request Body:


{
    "title": "Update presentation",
    "status": "completed"
}


Response:


{
    "id": 2,
    "employee_id": 1,
    "title": "Update presentation",
    "status": "completed",
    "created_at": "2025-01-08T00:00:00.000000Z",
    "updated_at": "2025-01-08T00:05:00.000000Z"
}

5. Mark Task as Complete

URL: /api/tasks/{id}/complete
Method: PATCH
Response:


{
    "id": 2,
    "employee_id": 1,
    "title": "Prepare presentation",
    "status": "completed",
    "created_at": "2025-01-08T00:00:00.000000Z",
    "updated_at": "2025-01-08T00:05:00.000000Z"
}
