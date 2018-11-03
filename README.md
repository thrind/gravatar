# thrind/
# .......Gravatar

If you want to get your Gravatar url with one easy function and for every account in your project, this is for you.

## Getting Started

These instructions will help you install the class on your project and use it.

### Prerequisites

No one aha, just a recent version of php (but I know you already have this).

### Installing

use `composer require thrind/gravatar`

on your project, use 
```
$gravatar = \Gravatar\Gravatar::getImage('email@email.com', 80, 'g');
<img src='$gravatar' />
```
* 1\email : email you want to get url
* 2\size : 10, 20, 30 or 40 or 400, idk, size of the pic you want
* 3\rule : see the gravatar.php file, everything is on it

## Authors

* **Corentin Gouloumy** - *Initial work* - [thrind](https://github.com/thrind)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
