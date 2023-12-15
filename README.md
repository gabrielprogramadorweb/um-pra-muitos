Docker Laravel
1. Clone project
git clone https://github.com/gabrielprogramadorweb/laravel-docker.git

2. Navigate in project directory
cd docker-laravel

3. Composer install
On Linux/MacOS: docker run --rm -v $(pwd):/app composer install
On Windows in PowerShell: docker run --rm -v ${PWD}:/app composer install
On Windows in CMD: docker run --rm -v %cd%:/app composer install

4. Create .env file
cp .env.example .env

5. Start everything
docker-compose up

6. Generate key for Laravel application
docker-compose exec app php artisan key:generate

7. Profit
Enter on http://localhost

Source: DigitalOcean Community
