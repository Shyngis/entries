source .env
mysqldump -u root $DB_DATABASE > backups/$DB_DATABASE-$(date +"%d").sql
php artisan down
git fetch --all
git reset --hard shyngis/main
composer update
npm i
npm run build
php artisan optimize:clear
php artisan up