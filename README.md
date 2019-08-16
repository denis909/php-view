# View

## Usage

```
use denis909\view\Renderer;

$renderer = new Renderer(__DIR__ . '/templates'); // create renderer instance

$content = $renderer->render('test', ['param1' => 'value 1']); // render template to string

echo $content;

```

### Template Example

```
<h1>top</h1>

<?= $param1;?>

<p>bottom</p>
```

## Advanced Usage

You can render any file outside templates directory:

```
$content = $renderer->renderFile(__DIR__ . '/templates2/test.php', ['param1' => 'value 1']);

echo $content; 
```
