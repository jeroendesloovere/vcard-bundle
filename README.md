# VCardBundle
A Symfony2 bundle for creating vCards.

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
