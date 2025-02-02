<?php

declare(strict_types=1);

namespace Hypermage\ComponentCustomerHeader\ViewModel;

use Magento\Customer\Model\Customer;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use Magento\Customer\Model\SessionFactory as CustomerSessionFactory;

readonly class Header implements ArgumentInterface
{
    public function __construct(
        private CustomerSessionFactory $customerSessionFactory,
    )
    {
    }

    public function getCustomerData(): Customer
    {
        return $this->customerSessionFactory->create()->getCustomer();

    }
}
