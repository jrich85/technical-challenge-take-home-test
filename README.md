# Technical Interview Challenge 1

## Installation

1. Install docker compose https://docs.docker.com/compose/install/#scenario-one-install-docker-desktop
2. Clone the repository
2. Run `docker-compose up`
4. Run `docker-compose exec my-app composer install -o`
3. Run `docker-compose exec my-app php artisan migrate`
4. Load in browser http://localhost:8081

## Running the seeder

Run `docker-compose exec my-app php artisan migrate --seed`,

Or if you want to start fresh:

Run `docker-compose exec my-app php artisan migrate:fresh --seed`

This will create a bunch of parking spots in one parking lot, so you can see the actions take effect.

## Future steps

Future steps would be to add filtering to the summary endpoint, allowing for focusing on different
parking lots, floors, sectors, or places to fit a van, to name a few.
