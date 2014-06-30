<?php

namespace Puphpet\Extension\MagentoBundle\Controller;

use Puphpet\MainBundle\Extension;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller implements Extension\ControllerInterface
{
    public function indexAction(array $data, $extra = '')
    {
        
        return $this->render('PuphpetExtensionMagentoBundle:form:Magento.html.twig', [
            'magento' => $data,
        ]);
    }

    /**
     * @return array
     */
    private function getData()
    {
        $config = $this->get('puphpet.extension.magento.configure');
        return $config->getData();
    }
}
