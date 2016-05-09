# Slim Blade View

## Install

```bash
composer require carc1n0gen/slim-blade/view
```

## Usage

```php
$app = new Slim\App();

$container = $app->getContainer();

$container['view'] = function ($c) {
	return new App\Core\Adapters\Blade(
		__DIR__.'/views',
		__DIR__.'/cache'
	);
};

$app->get('/', function($request, $response) {
	return $this->view->render($response, 'welcome', ['msg' => 'Welcome']);
});
```
