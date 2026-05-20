# Prestige Shoes

A custom WordPress theme and WooCommerce setup for a Lagos-based luxury footwear retailer specializing in imported European dress shoes. Built from the ground up to feel editorial, restrained, and confident, in line with how legacy menswear houses like Edward Green, John Lobb, and Crockett & Jones present themselves online.

## Live Demo

Coming soon. Site is currently in pre-launch on a local development environment.

## Screenshots

_Screenshots will be added once the site is deployed._

<!-- Add screenshots here -->
<!-- ![Homepage hero](screenshots/01-hero.png) -->
<!-- ![Categories grid](screenshots/02-categories.png) -->
<!-- ![Heritage section](screenshots/03-heritage.png) -->
<!-- ![Lookbook](screenshots/04-lookbook.png) -->

## Tech Stack

- **CMS:** WordPress 6.x
- **E-commerce:** WooCommerce
- **Theme:** Custom-built (no parent theme, no page builder)
- **Languages:** PHP, HTML, CSS, JavaScript (vanilla)
- **Fonts:** Cormorant Garamond (serif), Jost (sans-serif)
- **Payment gateways:** Paystack, Flutterwave, Direct Bank Transfer
- **Development environment:** LocalWP

## Features

- **Self-installing theme:** On activation, the theme programmatically creates 9 content pages with their templates, 5 navigation menus assigned to their locations, the static homepage, and clean permalink structure. Zero manual setup.
- **WooCommerce integration:** Currency (NGN, 0 decimals), shipping zone (Nigeria with tiered pricing), and product display all configured to match the brand's luxury positioning.
- **Custom page templates:** About / Heritage, FAQs, Contact, Size Guide, Shoe Care, plus standard policy pages (Privacy, Terms, Refund, Shipping).
- **Editorial homepage:** Hero with image-and-text layout, marquee strip, 4-tile categories grid, heritage narrative, 3-act lookbook, Instagram strip, trust badges.
- **Fully responsive:** Tested across desktop, tablet, phone, and small-phone breakpoints.
- **Customizer-driven content:** Phone, email, WhatsApp, social URLs, hero image, hero copy, category images, all editable through Appearance > Customize.
- **Accessibility:** Semantic HTML, alt attributes on images, keyboard-navigable menu, focus states on interactive elements.

## Project Structure

```
prestige-shoes/
├── 404.php
├── assets/
│   ├── css/
│   ├── js/
│   └── images/
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── inc/
│   ├── auto-setup.php       # Programmatic page/menu creation
│   ├── customizer.php       # Theme Customizer fields
│   └── woocommerce.php      # WooCommerce integration
├── index.php
├── page-about.php
├── page-contact.php
├── page-faq.php
├── page-privacy-policy.php
├── page-refund-policy.php
├── page-shipping-policy.php
├── page-shoe-care.php
├── page-size-guide.php
├── page-terms.php
├── page.php
├── screenshot.png
├── search.php
├── searchform.php
└── style.css
```

## Setup

1. Clone or download this repository.
2. Place the `prestige-shoes` folder in your WordPress install at `/wp-content/themes/`.
3. In WP admin, go to **Appearance > Themes** and activate **Prestige Shoes**.
4. On activation, the theme runs a one-time setup script that creates pages, menus, and basic settings automatically.
5. Install and activate **WooCommerce** (Plugins > Add New). The theme detects WooCommerce activation and configures currency and shipping for Nigeria.
6. Optionally install **Paystack** and **Flutterwave** plugins for payment gateways.
7. Personalize via **Appearance > Customize**: upload your hero image, set contact details, social links.

## Design Decisions

A few principles guided the build:

- **Restraint over ornament:** Most luxury menswear sites trade in stillness, not movement. Minimal animation, generous whitespace, slow-paced typography.
- **Editorial structure:** The homepage reads like a magazine: an opening image, a narrative, a curated set of "acts", a quiet sign-off. Not a product showroom.
- **Local context:** Pricing in Naira, payment via Paystack and Flutterwave, free Lagos delivery messaging. Built for the Nigerian customer first.
- **Performance:** No page builder, no jQuery, no heavy frameworks. Just vanilla PHP, CSS, and a small amount of JavaScript.

## License

This theme is released under the GPLv2 license, consistent with WordPress's licensing.

## Author

Built by [Michael Ogujor](https://github.com/Ogujor1).

Open to collaboration, freelance work, and similar build briefs.
