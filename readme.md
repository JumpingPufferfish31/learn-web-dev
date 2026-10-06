# Learn Web Dev

Just a personal project for learning web dev basics.

## Architecture

Both php and flask/python are used just to get different perspectives for learning purposes.
We'll try to match the 2 servers in terms of functionality and make them interchangeable.
Both will point to the same db.

We'll use [laragon](https://laragon.org/) to manage the apache server and db for now.

## Setup

### Python

1. Create a venv virtual environment
    ```bash
    python -m venv venv
    ```
2. Activate the environment
    ```bash
    source venv/Scripts/actiate
    ```
3. Install dependencies
    ```bash
    pip install -r requirements.txt
    ```

### PHP

1. Link web server dir to php/

## Development

### Python

#### Installing New Dependencies
```bash
pip install exampledependency
pip freeze > requirements.txt
```

## Usage

### Python Server
```bash
flask --app python/index run
```

### PHP Server

Run via web server
