## **v1.6.0 (2018-03-30)**

### Added
* Woocommerce support
* Basic boilerplate for woocommerce (`.twig` and `.sass.` files)

### Changed
* Updated javascrit packages

### Fixed
* Images and fonts `publicPath` in `webpack.config.js`
* Fixed localize path in `bootstrap.php`

## **v1.5.0 (2017-11-19)**

### Added
* `build/` for webpack config and custom config
*  new webpack alias `~images` for relative image paths

### Changed
* moved `bootstrap.php` to `app/bootstrap.php`
* refactored webpack config

## **v1.4.2 (2017-11-16)**

### Added
* Theme init config from `functions.php` to `bootstrap.php`
* Extensions to webpack config. Now Vue file can be imported without using .vue extension

### Changed
* Refactored assets

### Fixed
* Vue production bundle (Fixed Webpack config)

## **v1.4.0 (2017-11-11)**

### Added
* Maintenance mode
* Maintenance config to `app/config/wp/maintenance.php`
* Maintenance page tempalte `resources/views/maintenance.twig`
* PHP dotenv (Environment variables)

### Fixed
* Bug in webpack config

## **v1.3.0 (2017-11-05)**

### Added
* Custom image size config to `app/config/wp/image-sizes.php`
* Some security config to `app/config/wp/security.php`

### Changed
* Luna 1.0.0 -> 1.1.0 (A new command make:shortcode)
* updated packages

## **v1.2.0 (2017-10-22)**

### Added
* Third menu level (Wordpress Main menu supports third menu level)
* Favicon to admin page and login page

### Changed
* Refactored Navbar component
* Refactored `_variables.sass` file

### Fixed
* Pagination border-color

---

## **v1.1.0 (2017-10-01)**

### Added
* Login page config to `app/config/wp/login-page.php`
* Favicon to `resources/assets/images/favicon.png`
* Login page styles to `resources/assets/sass/login.sass`
* Images path helper `images_path()` to `app/helpers.php`
* `File-loader` and `image-webpack-loader` to webpack

### Changed
* Sass variables to own file `resources/assets/sass/_variables.sass`


### Fixed
* CleanWebpackPlugin better config. Watch mode clear static folder after every build

### Removed
* `purifycss` and `purifycss-webpack` packages
