# STA Dynamic Booking System

A powerful and flexible WordPress plugin built for WooCommerce, allowing product rentals and bookings with dynamic pricing based on rental duration.

## Table of Contents

- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [Folder Structure](#folder-structure)
- [Configuration](#configuration)
- [Contributing](#contributing)
- [License](#license)

---

## Features

- **WooCommerce Integration**: Seamlessly integrates with WooCommerce to manage rentals as products.
- **Dynamic Pricing**: Adjusts rental pricing based on the selected duration.
- **Date Pickers**: User-friendly date selection for start and end dates.
- **Custom Product Type**: Adds a new "Rental Product" type for easy management.
- **Localization Ready**: Supports translations for multiple languages.
- **Admin Dashboard Tools**: Easy-to-use admin tools for managing bookings and settings.

---

## Installation

1. **Download the Plugin**:
   - Clone the repository: `git clone https://github.com/yourusername/sta-dynamic-booking-system.git`

2. **Upload to WordPress**:
   - Upload the `sta-dynamic-booking-system` folder to your `wp-content/plugins` directory.

3. **Activate the Plugin**:
   - Go to the WordPress admin dashboard.
   - Navigate to **Plugins** > **Installed Plugins**.
   - Activate *STA Dynamic Booking System*.

4. **Ensure WooCommerce Is Active**:
   - The plugin requires WooCommerce. Make sure WooCommerce is installed and activated.

---

## Usage

1. **Creating a Rental Product**:
   - Go to **Products** > **Add New** in your WordPress admin.
   - Select "Rental Product" as the product type.
   - Set a base price and configure other settings as needed.

2. **Adding Booking Fields**:
   - The booking form is automatically added to the product page, allowing users to select start and end dates.

3. **Configuring Pricing Rules**:
   - Customize pricing rules in the code to adjust rental prices based on duration.

---

## Folder Structure

sta-dynamic-booking-system/ │ ├── admin/ # Admin-related settings and functions ├── assets/ # CSS, JavaScript, and images │ ├── css/ │ └── js/ ├── classes/ # PHP classes for custom product types and functionality ├── inc/ # Helper functions and core logic ├── languages/ # Translation files ├── lib/ # External libraries and dependencies ├── templates/ # Template files for frontend display └── sta-dynamic-booking-system.php # Main plugin file


---

## Configuration

1. **Localization**:
   - Use `load_plugin_textdomain()` to add translations.
   - Place translation files in the `languages/` directory.

2. **Customizing Pricing**:
   - Edit `inc/functions-booking-helpers.php` to modify pricing logic based on the rental duration.

3. **Enqueuing Scripts**:
   - Customize or add scripts in `inc/functions-assets.php` to manage frontend and backend assets.

---

## Contributing

Contributions are welcome! Here's how you can help:

1. **Fork the Repository**: Click on the "Fork" button at the top right of this page.
2. **Clone Your Fork**: `git clone https://github.com/yourusername/sta-dynamic-booking-system.git`
3. **Create a New Branch**: `git checkout -b feature-your-feature-name`
4. **Commit Changes**: `git commit -m "Add your commit message here"`
5. **Push to Your Fork**: `git push origin feature-your-feature-name`
6. **Submit a Pull Request**: Describe your changes and submit your PR.

---

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

---

## Support

For support or questions, please [open an issue](https://github.com/yourusername/sta-dynamic-booking-system/issues) on GitHub, or reach out via [suport@bdcalling.com](mailto:support@bdcalling.com).

