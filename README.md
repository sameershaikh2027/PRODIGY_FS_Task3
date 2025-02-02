## **PRODIGY_FS_03**
#**E-Commerce Website**

## **Project Overview**

This project is a full-stack e-commerce web application developed for a local grocery store. The platform enables customers to seamlessly browse products, add them to their cart, and place orders online. The website features a clean, responsive design that delivers a smooth shopping experience across all devices.

### **Key Features**

- **Easy Navigation:** A user-friendly menu that helps users effortlessly navigate between sections, such as Home, Featured Products, Categories, Reviews, and Blogs.
- **Responsive Layout:** The website is fully responsive, ensuring an optimal viewing experience across devices of all sizes, from desktops to mobile phones.
- **Hero Section:** A visually appealing banner with an overlaying statement, “Fresh and Organic Products for You,” and a 'Shop Now' button leading to the product catalog.
- **Featured Products Section:** Highlights store offerings like 'Fresh and Organic,' 'Free Delivery,' and 'Easy Payments' through individual cards with images and descriptions.
- **Product Listings:** Displays items in a grid with images, descriptions, prices, and an 'Add to Cart' button for easy shopping.
- **Cart Management:** Users can add, update quantities, and remove items from their cart before proceeding to checkout.
- **Customer Reviews:** Features a review section showcasing customer feedback with star ratings and testimonials.
- **Footer:** Contains the store’s logo, contact details, social media links, and quick navigation links to important sections.
- **Database Integration:** The platform integrates with a MySQL database to manage product inventory, orders, and customer information.

---

## **Tech Stack**

### **Frontend:**

- **HTML, CSS:** Used for structuring the content and styling the website.
- **JavaScript:** Implements interactive features, such as product addition to the cart.
- **Responsive Web Design:** Ensured using media queries for a seamless experience across various screen sizes.

### **Backend:**

- **PHP:** Handles server-side logic, including session management, order processing, and interaction with the database.
- **MySQL:** Manages data storage for product listings, orders, and customer information.

---

## **Project Structure**

### **Directory Overview:**

- **/css:** Contains all the stylesheets that define the look and feel of the website.
- **/img:** Image assets for products, banners, and icons.
- **/js:** JavaScript files responsible for dynamic features, like cart management.
- **/php:** PHP scripts handling server-side logic, database operations, and session management.
- **index.php:** The homepage, containing the main sections such as product listings, hero banner, and featured sections.
- **cart.php:** Dedicated to displaying the cart with options to modify quantities and proceed to checkout.

---

## **Installation**

### **Prerequisites:**

- **XAMPP/WAMP/MAMP:** A local server environment with PHP and MySQL support.
- **Web Browser:** Any modern browser like Google Chrome or Mozilla Firefox.

### **Steps to Install Locally:**

1. Install XAMPP, WAMP, or MAMP to set up a local development server.
2. Clone this repository or download the project files.
3. Move the project folder to your server's root directory:
   - For **XAMPP**, place it in the `htdocs` folder.
   - For **WAMP**, place it in the `www` folder.
4. Start your local server.
5. In your web browser, navigate to `http://localhost/[your_project_folder]/index.php` to access the website.

### **Database Setup:**

1. Open **phpMyAdmin** by going to `http://localhost/phpmyadmin`.
2. Create a new database named `order_manager`.
3. Import the SQL file located in the `sql/` directory to create the necessary tables and insert sample data.
4. Adjust the database credentials in your PHP files (`config.php` or equivalent) to match your local server configuration if necessary.



## **Usage**

### **Homepage:**

- The homepage (`index.php`) serves as the central hub for browsing available products.
  
### **Shopping Cart:**

- Add products to your cart from the product listing pages by clicking the 'Add to Cart' button.
- Review the items in your cart, update quantities, or remove products by navigating to the `cart.php` page.
  
### **Placing Orders:**

- Once the cart is finalized, users can submit their order. Order details will be stored in the database for processing under the `orders` table.


## **Code Overview**

### **Navbar:**
The navigation bar offers quick access to various sections of the website. It features a flexible, responsive design that adjusts to different screen sizes, and includes the store’s logo, product categories, a search bar, and cart icons.

### **Hero Section:**
A full-width banner image with a promotional message and a call-to-action button that leads users to the product catalog. The banner resizes automatically based on the screen size for optimal presentation.

### **Featured Section:**
Displays the store’s key selling points in a modern card-based design. Each feature is accompanied by an icon and a brief description, ensuring clarity and user engagement.

### **Product Listings:**
Products are displayed in a responsive grid layout with each product in a container that shows an image, price, and an 'Add to Cart' button. The layout adjusts the number of products per row based on the screen size.

### **Review Section:**
Customer reviews are presented in a simple and clean format. Each review includes a star rating, a photo, and a short testimonial, offering potential customers insights into the store’s service and product quality.

### **Footer:**
The footer is divided into three columns. On the left, the store logo and address; in the center, contact information such as phone numbers and social media links; and on the right, quick navigation links to key sections of the website.



## **Future Enhancements**

1. **Order Tracking:** Implement a system to allow customers to track the status of their orders in real-time.
2. **Customer Reviews Submission:** Enable registered users to submit their own reviews and ratings for products.
3. **Advanced Product Filters:** Add the ability to filter products by category, price range, and other criteria.
4. **Customer Support:** Integrate a live chat or contact form to provide real-time assistance to users.



## **License**

This project is licensed under the MIT License. 
