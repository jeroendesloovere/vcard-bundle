<?php

namespace JeroenDesloovere\VCardBundle\DependencyInjection;

/*
 * This file is part of the VCard bundle.
 *
 * (c) Jeroen Desloovere <info@jeroendesloovere.be>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\DependencyInjection\ContainerBuilder,
    Symfony\Component\Config\FileLocator,
    Symfony\Component\HttpKernel\DependencyInjection\Extension,
    Symfony\Component\DependencyInjection\Loader,
    Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * JeroenDesloovereVCardExtension
 */
class JeroenDesloovereVCardExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration(
            $configuration, 
            $configs
        );

        $container->setParameter(
            'scribe_clockwork.log_activity',
            $config['log_activity']
        );

        $loader = new YamlFileLoader(
            $container, 
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.yml');
    }
}