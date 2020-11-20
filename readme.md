# Notch Relay API

Notch Relay API wrapper

Requires PHP 5.3 and hightler.

## Installation

Install mnotchrelay-api using Composer:

```
composer require chapdel/notchrelay-api
```

You will then need to:

- run `composer install` to get these dependencies added to your vendor directory
- add the autoloader to your application with this line: `require("vendor/autoload.php")`

## Usages

To use Notch Relay Api you need API KEY

```php
use \Chapdel\NotchRelay\NotchRelay;

$notchrelay = new NotchRelay('abc123abc123abc123abc123abc123');
```

Subscribe someone to a list (with `subscribe` method):

```php
$list_id = '1234346';

$result = $notchrelay->subscribe('abc@example.com', $list_id);

print_r($result);
```

Unsubscribe someone to a list (with `unsubscribe` method):

```php
$list_id = '1234346';

$result = $notchrelay->unsubscribe('abc@example.com', $list_id);

print_r($result);
```

Subscribe or update someone to a list (with `subscribeOrUpdate` method):

```php
$list_id = '1234346';

$result = $notchrelay->unsubscribe('abc@example.com', $list_id);

print_r($result);
```

## Contributing

This is a fairly simple wrapper, but it has been made much better by contributions from those using it. If you'd like to suggest an improvement, please raise an issue to discuss it before making your pull request.

Pull requests for bugs are more than welcome - please explain the bug you're trying to fix in the message.
