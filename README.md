# View

## Installation

`composer require denis909/view`

## Usage

```
use denis909\view\View;

$view = new View(__DIR__ . '/templates'); // create renderer instance

$content = $view->render('test', ['param1' => 'value 1']); // render template to string

echo $content;

```

#### Template

`/templates/test.php`

```
<h1>top</h1>

<?= $this->escape($param1);?>

<p>bottom</p>
```

## Advanced Usage

You can render files outside templates directory:

```
$content = $view->renderFile(__DIR__ . '/templates2/test.php', ['param1' => 'value 1']);

echo $content; 
```
