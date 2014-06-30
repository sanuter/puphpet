<?php

namespace Puphpet\Extension\MagentoBundle;

use Puphpet\MainBundle\Extension;

use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class Configure extends Extension\ExtensionAbstract
{
    protected $name = 'Magento';
    protected $slug = 'magento';
    protected $targetFile = 'puphpet/puppet/manifest.pp';

    protected $sources = [
        'magento' => ":git => 'https://github.com/sanuter/puppet-magento.git'"
    ];

    /**
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->dataLocation = __DIR__ . '/Resources/config';

        parent::__construct($container);
    }

    public function getFrontController()
    {
        return $this->container->get('puphpet.extension.magento.front_controller');
    }

    public function getManifestController()
    {
        return $this->container->get('puphpet.extension.magento.manifest_controller');
    }
}
