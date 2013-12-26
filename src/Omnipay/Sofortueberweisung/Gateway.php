<?php

namespace Omnipay\Sofortueberweisung;

use Omnipay\Common\AbstractGateway;
use Omnipay\Sofortueberweisung\Message\CompletePurchaseRequest;
use Omnipay\Sofortueberweisung\Message\PurchaseRequest;


class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Sofortueberweisung';
    }

    public function getDefaultParameters()
    {
        return array(
            'user_id' => '',
            'project_id' => ''
        );
    }

    public function getUserId()
    {
        return $this->getParameter('user_id');
    }

    public function setUserId($value)
    {
        return $this->setParameter('user_id', $value);
    }
	
    public function getProjectId()
    {
        return $this->getParameter('project_id');
    }

    public function setProjectId($value)
    {
        return $this->setParameter('project_id', $value);
    }	

    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Sofortueberweisung\Message\PurchaseRequest', $parameters);
    }

    public function completePurchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\Sofortueberweisung\Message\CompletePurchaseRequest', $parameters);
    }
}
