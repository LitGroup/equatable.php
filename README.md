# Equatable for PHP

> Provides `EquatableInterface` for PHP 7+. Inspired by Java.

```php
interface EquatableInterface
{
    /**
     * Indicates whether some other object is "equal to" this one.
     */
    public function equals(EquatableInterface $other): bool;
}
```

## Example of usage

```php
namespace Acme;

use LitGroup\Equatable\EquatableInterface;

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
     * Example of implementation of EquatableInterface::equals()
     */
    public function equals(EquatableInterface $other): bool
    {
        return 
            $other instanceOf User &&
            $other->getUsername() == $this->getUsername() &&
            $other->getEmail() == $this->getEmail()
        ;
    }
}
```