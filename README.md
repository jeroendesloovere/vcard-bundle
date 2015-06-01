# VCardBundle
A Symfony2 bundle for creating vCards. Which uses the [VCard class](https://github.com/jeroendesloovere/vcard).

## Usage

### Installation

In **composer.json**

```yaml
"require": {
    "jeroendesloovere/vcard-bundle": "1.0.*"
}
```

**and in ```app/AppKernel.php```**
```php
public function registerBundles()
{
    $bundles = array(
        // ...,
        new JeroenDesloovere\Bundle\VCardBundle\JeroenDesloovereVCardBundle()
    );
}
```

### Example

```php
$vcard = $this->get('jeroendesloovere.vcard');

$vcard->addName('Jeroen', 'Desloovere');
$vcard->download();
```
