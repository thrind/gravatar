# thrind/
# .......Gravatar

If you want to get your Gravatar url with one easy function and for every account in your project, this is for you.

## Getting Started

These instructions will help you install the class on your project and use it.

### Prerequisites

No one aha, just a recent version of php (but I know you already have this).

### Installing

use `composer require thrind/gravatar`

on your project, use `\Gravatar\Gravatar::getImage('email', size, rule);`
(I put it on `<img src='$gravatar' />`)
-- email : email you want to get url
-- size : 10, 20, 30 or 40 or 400, idk, size of the pic you want
-- rule : see the gravatar.php file, everything is on it

## Authors

* **Corentin Gouloumy** - *Initial work* - [thrind](https://github.com/thrind)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
