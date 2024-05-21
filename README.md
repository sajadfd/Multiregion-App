# Multiregion App

## Installation

1. Clone the repository
2. Run `composer install`
3. Set up your `.env` file
4. Run `php artisan migrate`
5. Run `php artisan parse:cities`
6. Serve the application using `php artisan serve`

## Usage

- Access the application at `http://localhost:8000`
- Select a city to see the routes update accordingly
- Use the API endpoints to add or delete cities

## API Endpoints

- `POST /api/cities` to add a new city
- `DELETE /api/cities/{id}` to delete a city
