# Laravel Blog Application

A full-featured blog application built with Laravel, featuring user authentication, profile management, and blog post CRUD operations.

## Features

### Authentication
- User registration
- User login/logout
- Password reset functionality
- Remember me option

### User Profile
- View profile information
- Edit profile details (name, email)
- Change password
- View post count and membership date

### Blog Posts
- Create, read, update, and delete blog posts
- View all posts
- View individual post details
- Bootstrap modal for delete confirmation

### User Interface
- Responsive design with Bootstrap and Tailwind CSS
- User profile dropdown in navigation
- Flash messages for success/error notifications
- Form validation with error messages

## Technologies Used
- Laravel 10.x
- PHP 8.x
- MySQL/PostgreSQL
- Bootstrap 5.3
- Tailwind CSS
- Font Awesome 6.4
- Alpine.js

## Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd <project-directory>
```

2. Install dependencies:
```bash
composer install
npm install
```

3. Create a `.env` file from the example:
```bash
cp .env.example .env
```

4. Generate application key:
```bash
php artisan key:generate
```

5. Configure your database in the `.env` file:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

6. Run migrations:
```bash
php artisan migrate
```

7. Start the development server:
```bash
php artisan serve
```

8. In a separate terminal, compile assets:
```bash
npm run dev
```

## API Endpoints

### Authentication
- `POST /api/register` - Register a new user
- `POST /api/login` - Login user
- `POST /api/logout` - Logout user
- `GET /api/user` - Get authenticated user details

### Posts
- `GET /api/posts` - Get all posts
- `POST /api/posts` - Create a new post
- `GET /api/posts/{id}` - Get a specific post
- `PUT /api/posts/{id}` - Update a post
- `DELETE /api/posts/{id}` - Delete a post

## Web Routes

### Authentication
- `GET /register` - Show registration form
- `POST /register` - Process registration
- `GET /login` - Show login form
- `POST /login` - Process login
- `POST /logout` - Process logout

### Profile
- `GET /profile` - Show user profile
- `GET /profile/edit` - Show edit profile form
- `PUT /profile` - Update profile
- `PUT /profile/password` - Update password

### Posts
- `GET /` - Show all posts
- `GET /posts/create` - Show create post form
- `POST /posts` - Store a new post
- `GET /posts/{id}` - Show a specific post
- `GET /posts/{id}/edit` - Show edit post form
- `PUT /posts/{id}` - Update a post
- `DELETE /posts/{id}` - Delete a post

## Project Structure

### Controllers
- `Auth/LoginController.php` - Handles user authentication
- `Auth/RegisterController.php` - Handles user registration
- `ProfileController.php` - Manages user profile
- `PostController.php` - Manages blog posts

### Models
- `User.php` - User model with relationships
- `Post.php` - Post model with relationships

### Views
- `layouts/app.blade.php` - Main application layout
- `auth/login.blade.php` - Login form
- `auth/register.blade.php` - Registration form
- `profile/show.blade.php` - Profile display
- `profile/edit.blade.php` - Profile edit form
- `posts/index.blade.php` - Posts listing
- `posts/show.blade.php` - Single post view
- `posts/create.blade.php` - Create post form
- `posts/edit.blade.php` - Edit post form

## License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Deployment

The application is deployed on the Laravel Cloud platform and can be accessed at the following URL:

[https://assessment-task-main-89dize.laravel.cloud/](https://assessment-task-main-89dize.laravel.cloud/)
