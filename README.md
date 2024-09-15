# LeaveSync

A comprehensive Leave Management System built with Laravel 10.0 and Tailwind CSS. This application allows employees to apply for leave, while administrators can approve or deny these requests. The system also sends email notifications to users when their leave requests are approved or denied.

## Features

-   User authentication (login, registration)
-   User dashboard to view and manage leave requests
-   Admin dashboard to view pending, approved, and denied leave requests
-   Create, edit, and delete leave requests
-   Email notifications for leave approval and denial
-   Responsive UI with Tailwind CSS

## Prerequisites

-   [PHP](https://www.php.net/downloads) >= 8.0
-   [Composer](https://getcomposer.org/download/)
-   [Node.js](https://nodejs.org/en/download/) & npm
-   [MySQL](https://dev.mysql.com/downloads/)

## Run Commands in terminal before starting

-   composer install
-   npm install
-   php artisan key:generate
-   php artisan migrate

## Run commands for starting project

-   npm run dev
-   php artisan serve

## UI Screenshots

![screenshot](samples/home.png)

![screenshot](samples/user-dashboard.png)

![screenshot](samples/create-leave.png)

![screenshot](samples/leaves.png)

![screenshot](samples/admin-dashboard.png)

![screenshot](samples/pending-leaves.png)

![screenshot](samples/approved-leaves.png)

![screenshot](samples/monthly-report.png)
