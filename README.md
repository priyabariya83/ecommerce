# ecommerce
# 🛒 E-Commerce Website - TrendMart

A full-featured e-commerce website built with **PHP, MySQL, HTML, and CSS** that includes product catalog, shopping cart, checkout system, and session-based cart management.

## 🌟 Live Demo
[View Demo Video](https://drive.google.com/file/d/1_kGjOQWFEU0LABghGir8oT2JS5CRMRUI/view?usp=sharing)

## ✨ Features

- **🛍️ Product Catalog** - Display products with images, names, and prices
- **🛒 Shopping Cart** - Session-based cart with add/remove/update functionality
- **🔐 Secure Checkout** - Order placement with form validation
- **🎨 Modern UI** - Responsive design with gradient colors and smooth animations
- **📱 Mobile Friendly** - Fully responsive across all devices
- **🔄 Real-time Updates** - Cart updates without page refresh (via forms)
- **💰 Price Calculation** - Automatic total calculation with quantity changes

## 🛠️ Tech Stack

- **Backend**: PHP 7.4+
- **Database**: MySQL
- **Frontend**: HTML5, CSS3, JavaScript
- **Server**: Apache/XAMPP/WAMP
- **Session Management**: PHP Sessions

## 📁 Project Structure

```
ecommerce/
├── index.php                 # Home page - Product listing
├── product.php              # Individual product page
├── viewcart.php             # Shopping cart page
├── checkout.php             # Checkout page
├── add_to_cart.php          # Add product to cart
├── update_cart.php          # Update cart quantity
├── remove.php               # Remove item from cart
├── delete_product.php       # Admin: Delete product
├── config/
│   └── db.php              # Database connection
├── assets/
│   ├── css/
│   │   └── style.css       # Main stylesheet
│   └── images/             # Product images
└── README.md               # This documentation
```

## 🗄️ Database Setup

1. **Create Database:**
   ```sql
   CREATE DATABASE ecommerce;
   USE ecommerce;
   ```

2. **Create Products Table:**
   ```sql
   CREATE TABLE products (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(255) NOT NULL,
       price DECIMAL(10,2) NOT NULL,
       image VARCHAR(255),
       description TEXT
   );
   ```

3. **Insert Sample Data:**
   ```sql
   INSERT INTO products (name, price, image, description) VALUES
   ('Wireless Headphones', 2999.00, 'headphones.jpg', 'Premium wireless headphones'),
   ('Smart Watch', 4999.00, 'watch.jpg', 'Feature-rich smart watch'),
   ('Laptop Bag', 1499.00, 'bag.jpg', 'Durable laptop backpack'),
   ('USB-C Cable', 399.00, 'cable.jpg', 'Fast charging cable');
   ```

## 🚀 Installation & Setup

1. **Clone the repository**
   ```bash
   git clone https://github.com/priyabariya83/ecommerce.git
   ```

2. **Configure database**
   - Update `config/db.php` with your database credentials
   ```php
   $conn = mysqli_connect("localhost","your_username","your_password","ecommerce");
   ```

3. **Place in web server directory**
   - Move files to `htdocs` (XAMPP) or `www` (WAMP)

4. **Start local server**
   - Start Apache and MySQL from XAMPP/WAMP control panel

5. **Access the website**
   - Open browser and go to `http://localhost/ecommerce/`

## 🎯 Core Functionality

### 1. **Product Listing (`index.php`)**
   - Displays all products from database
   - Responsive grid layout
   - Direct links to individual product pages

### 2. **Product Details (`product.php`)**
   - Detailed product view
   - Quantity selector
   - Add to cart functionality

### 3. **Shopping Cart (`viewcart.php`)**
   - Session-based cart storage
   - Update quantity in real-time
   - Remove items with confirmation
   - Grand total calculation

### 4. **Checkout (`checkout.php`)**
   - Order form with validation
   - Payment simulation
   - Success notification

### 5. **Cart Management**
   - **Add**: `add_to_cart.php` - Adds product to session
   - **Update**: `update_cart.php` - Updates quantity
   - **Remove**: `remove.php` - Removes product from cart

## 🎨 Design Features

- **Gradient Headers**: Purple gradient navbar
- **Card Hover Effects**: Elevation and color transitions
- **Responsive Layout**: Mobile-optimized product grid
- **Clean Typography**: Modern font stack with proper hierarchy
- **Button States**: Interactive hover and active states

## 🔧 Configuration

### Database Connection (`config/db.php`)
```php
<?php
$conn = mysqli_connect("localhost","root","","ecommerce");
if(!$conn){
    die("Database connection failed");
}
?>
```

### Cart Session Structure
```php
$_SESSION['cart'][$product_id] = [
    "name" => "Product Name",
    "price" => 999.00,
    "image" => "product.jpg",
    "qty" => 2
];
```

## 📱 Responsive Design

- **Desktop**: 4-column grid (1200px+)
- **Tablet**: 2-column grid (768px - 1199px)
- **Mobile**: 1-column stack (< 768px)
- **Product Page**: Flexible layout for all screens

## 🚀 Future Enhancements

1. **User Authentication** - Login/registration system
2. **Admin Panel** - Product management dashboard
3. **Order History** - Track past purchases
4. **Payment Integration** - Real payment gateway
5. **Search & Filter** - Advanced product search
6. **Product Reviews** - Customer rating system
7. **Wishlist** - Save products for later

## 🛡️ Security Notes

⚠️ **Current Limitations:**
- Basic form validation
- No CSRF protection
- No SQL injection prevention in admin pages
- Session-based cart without user accounts

✅ **Recommended Improvements:**
- Use prepared statements for SQL queries
- Implement CSRF tokens
- Add form validation on server side
- Secure file uploads for product images
- Implement user authentication

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit changes (`git commit -m 'Add AmazingFeature'`)
4. Push to branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 👤 Author

**Priya Bariya**
- GitHub: [@priyabariya83](https://github.com/priyabariya83)


## 🙏 Acknowledgments

- Icons from Unicode emoji
- Color scheme inspired by modern e-commerce sites
- Design patterns from popular shopping platforms

---

⭐ **If you like this project, give it a star on GitHub!** ⭐

**Happy Coding! 🚀**
