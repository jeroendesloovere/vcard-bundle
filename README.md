# VCardBundle
A Symfony2 bundle for creating vCards.

## Usage

### Installation

**In ```app/AppKernel.php```**
```php
    public function registerBundles()
    {
        $bundles = array(
            // ...,
            new JeroenDesloovere\Bundle\VCardBundle\JeroenDesloovereVCardBundle()
        );
    }
```

and in **composer.json**

```yaml
"require": {
    "jeroendesloovere/vcard-bundle": "1.0.*"
}
```
