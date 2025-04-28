=== E-Commerce Website ===
Contributors: Joseph Justine
Tags: ecommerce, woocommerce, online store, shopping, marketplace
Requires at least: PHP 7.4, WooCommerce 5.0 (if applicable)
Tested up to: WordPress 6.7, WooCommerce 8.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A complete e-commerce solution for your online store with modern features and responsive design.

== Description ==

This e-commerce website package includes everything needed to launch and manage a professional online store:

* **Product Management**: Add physical/digital products with variants
* **Secure Payments**: Multiple payment gateway integrations
* **Mobile-Optimized**: Fully responsive design
* **Marketing Tools**: Coupons, discounts, and email campaigns
* **Analytics**: Track sales and customer behavior

== Features ==

### Core Features
- Product catalog with categories/tags
- Inventory management system
- Customer accounts and profiles
- Shopping cart and checkout system
- Order management dashboard
- Tax and shipping calculators
- Product reviews and ratings

### Advanced Features
- AJAX cart and quick view
- Product comparison tool
- Wishlist functionality
- Abandoned cart recovery
- Multi-language support (RTL ready)
- GDPR compliance tools

### Technical Features
- REST API for integrations
- Webhook support
- Progressive Web App (PWA) ready
- SEO optimized structure
- Fast loading performance
- Automated backups

== Installation ==

### WordPress/WooCommerce Version
1. Ensure WordPress and WooCommerce are installed
2. Upload theme files to `/wp-content/themes/`
3. Install required plugins:
   - WooCommerce
   - Payment gateways
   - Security plugin
4. Import demo content (if available)

### Custom Build Version
1. Upload files to your web server
2. Create MySQL database
3. Run installation wizard
4. Configure payment gateways
5. Set up SMTP for emails

== Configuration ==

1. **General Settings**
   - Set store location/currency
   - Configure tax rules
   - Set up shipping zones

2. **Payment Methods**
   - Enable PayPal/Stripe/etc.
   - Configure bank transfer
   - Set up cash on delivery

3. **Products**
   - Add product categories
   - Import product CSV
   - Set inventory thresholds

4. **Appearance**
   - Customize colors/fonts
   - Upload logo/favicon
   - Set up homepage sections

== Theme Customization ==

### Via WordPress Customizer
1. Go to Appearance → Customize
2. Modify:
   - Header/footer layout
   - Product card design
   - Typography
   - Color scheme

### Via CSS Overrides
Add custom CSS at:
`Appearance → Customize → Additional CSS`

Common classes:
- `.product-card`
- `.shop-loop-item`
- `.cart-totals`
- `.checkout-form`

== Plugin Recommendations ==

Essential plugins for e-commerce:
1. **WooCommerce** (if not included)
2. **Payment Gateways**:
   - WooCommerce PayPal Payments
   - Stripe for WooCommerce
3. **Security**:
   - Wordfence Security
   - iThemes Security
4. **Performance**:
   - WP Rocket
   - Imagify

== Troubleshooting ==

### Common Issues
1. **Checkout Not Working**
   - Verify payment gateway settings
   - Test with default theme
   - Check for JavaScript errors

2. **Product Images Not Loading**
   - Regenerate thumbnails
   - Check file permissions
   - Verify .htaccess rules

3. **Slow Performance**
   - Enable caching
   - Optimize images
   - Upgrade hosting plan

== Security Best Practices ==

1. Always keep WordPress/plugins updated
2. Use strong passwords and 2FA
3. Install SSL certificate
4. Regular malware scans
5. Daily backups (offsite)
6. Limit login attempts

== Developer Documentation ==

### Template Overrides
Override these templates by copying to your theme:
- `templates/cart/cart.php`
- `templates/checkout/form-checkout.php`
- `templates/single-product.php`

### Hooks Reference
Key action/filter hooks:
- `woocommerce_before_main_content`
- `woocommerce_product_options_general`
- `woocommerce_checkout_process`

== Changelog ==

= 1.0 =
* Initial release
* Core e-commerce functionality
* Basic payment gateways
* Responsive product grid

= 1.1 =
* Added AJAX cart
* Improved checkout flow
* Enhanced mobile styles

== Roadmap ==

Planned future features:
- Subscription products
- Marketplace functionality
- Advanced reporting
- Native mobile app
- AI product recommendations

== Support ==

For assistance, contact:
- Email: support@greentechdigital.com
- Help Center: https://help.greentechdigital.com
- Community Forum: https://community.greentechdigital.com
