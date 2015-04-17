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

use Symfony\Component\Config\Definition\Builder\TreeBuilder,
    Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('jeroendesloovere_vcard');

        $rootNode
            ->children()
                ->booleanNode('log_activity')
                    ->defaultFalse()
                    ->info('Log activity using Monolog')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}