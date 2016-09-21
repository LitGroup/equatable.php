# Equatable for PHP

> Provides `Equatable` for PHP 7+ (inspired by Java).

[![Version](https://img.shields.io/packagist/v/litgroup/equatable.svg)](https://packagist.org/packages/litgroup/equatable)
[![Downloads](https://img.shields.io/packagist/dt/litgroup/equatable.svg)](https://packagist.org/packages/litgroup/equatable)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)][license]

## Installation

```
composer require litgroup/equatable:^2.0
```

## What is inside

```php
interface Equatable
{
    /**
     * Checks if this object is equal to another one.
     */
    public function equals(Equatable $another): bool;
}
```

## Example of usage

```php
namespace Acme;

use LitGroup\Equatable\Equatable;

class User
{
    private $username;
    private $email;
    
    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }
    
    public function getUsername(): string
    {
        return $this->username;
    }
    
    public function getEmail(): string
    {
        return $this->email
    }
    
    /**
     * Example of implementation of Equatable::equals()
     */
    public function equals(Equatable $another): bool
    {
        return 
            $another instanceOf User &&
            $another->getUsername() == $this->getUsername() &&
            $another->getEmail() == $this->getEmail()
        ;
    }
}
```

## LICENSE
See [LICENSE][license] file.

[license]: https://raw.githubusercontent.com/LitGroup/equatable.php/master/LICENSE