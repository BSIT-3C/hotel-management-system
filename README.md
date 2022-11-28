# Hotel Management System

## 📒 Requirements
Make sure to install the following first:
-  [NodeJS](https://nodejs.org/en/download/)
-  [Xammp version 7](https://www.apachefriends.org/download.html)
-  [Composer](https://getcomposer.org/download/)
-  [Git](https://git-scm.com/downloads)

## 🔧Installation
#### Start the xammp server
1.  Open XAMMP control panel
2.  Start 'Apache' & 'MySQL' modules
3.  Check the site: http://localhost/phpmyadmin
4.  Create a new database in phpmyadmin and name it 'hotel_management_system'

5. Open your VS Code > Open Folder > (choose the folder where you want to clone the repo)
6. Open VS Code terminal (control key + ~) and enter the following commands:


 Clone the repository
```
git clone https://github.com/BSIT-3C/hotel-management-system.git
```


Change terminal directory
```
cd hotel-management-system
```


Install composer to the project
```
composer i
```


Install NPM to the project
```
npm i
```


Create .env
```
copy .env.example .env
```

Generate new app key
```
php artisan key:generate
```

Run the migration
```
php artisan migrate:fresh --seed
```

## ⚡Running the server

Enter these commands to your terminal:
```
php artisan serve
```
Open new terminal (control + shift + ~)

```
npm run dev
```

#### ✨You can now access the server at http://localhost:8000

test commit
