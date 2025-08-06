# CSE327_C_to_C_Rent_and_Sell_Platform

# C2C Rent and Sell Platform
[![Ask DeepWiki](https://devin.ai/assets/askdeepwiki.png)](https://deepwiki.com/FaysalMehrab/CSE327_C_to_C_Rent_and_Sell_Platform)

A consumer-to-consumer (C2C) web application built with PHP and MySQL that allows users to post advertisements to rent or sell products. The platform features separate dashboards for users and administrators, with an approval system for registrations and advertisements.

## Features

### User Features
- **Registration & Login**: Secure user registration with an admin approval system.
- **Profile Management**: Users can view and update their profile information.
- **Post Advertisements**: Create and submit advertisements for products to be rented, sold, or both. Ads require admin approval before going live.
- **Browse Products**: View a gallery of all approved and active products available for rent or sale.
- **Search Functionality**: Search for specific products by title.
- **Request to Buy/Rent**: Users can send requests to buy or rent items, which are then managed by an admin.

### Admin Features
- **Admin Dashboard**: A central hub for all administrative tasks, including a total revenue display.
- **Request Management**:
    - **Registration Requests**: View, accept, or deny new user registration requests.
    - **Advertisement Requests**: Approve or deny user-submitted product advertisements.
    - **Buy/Rent Requests**: Manage and finalize user requests to buy or rent products.
- **User Management**: View a list of all registered users and have the ability to delete user accounts.
- **Admin Information**: View a list of all registered administrators.
- **Category Management**: Add new product categories with associated images.

## Technology Stack
- **Backend**: PHP
- **Frontend**: HTML, CSS, JavaScript
- **Database**: MySQL / MariaDB

## Setup and Installation

To run this project locally, you will need a local server environment like XAMPP or WAMP.

1.  **Clone the repository:**
    ```bash
    git clone https://github.com/faysalmehrab/cse327_c_to_c_rent_and_sell_platform.git
    ```

2.  **Move to server directory:**
    Place the cloned project folder into your local server's web root directory (e.g., `htdocs` for XAMPP).

3.  **Database Setup:**
    -   Open phpMyAdmin or your preferred MySQL management tool.
    -   Create a new database named `login_demo`.
    -   Import the `login_demo.sql` file into the newly created database. This will set up the necessary tables and seed some initial admin data.

4.  **Database Configuration:**
    The database connection is configured in `config.php`. The default settings are:
    ```php
    $conn = mysqli_connect('localhost','root', '', 'login_demo');
    ```
    If your local MySQL setup uses different credentials, update this file accordingly.

5.  **Access the Application:**
    -   Start your Apache and MySQL services.
    -   Open your web browser and navigate to `http://localhost/cse327_c_to_c_rent_and_sell_platform/login_form.php`.

## Database Schema

The application uses several tables to manage data:

-   `req_reg`: Stores pending user registration requests.
-   `user_admin_info`: Contains information for all approved users and admins.
-   `tbl_category`: Manages product categories.
-   `tbl_product`: Stores pending advertisement requests from users.
-   `tbl_final_add`: Holds all approved and active product advertisements that are visible to users.
-   `tbl_buy_rent`: Stores pending requests from users to buy or rent a product.
-   `tbl_buy_rent_con`: Stores confirmed and completed buy/rent transactions, used for calculating total revenue.

## License
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.
