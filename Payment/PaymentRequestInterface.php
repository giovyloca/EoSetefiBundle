<?php

namespace Eo\SetefiBundle\Payment;

/**
 * PaymentRequestInterface
 */
interface PaymentRequestInterface
{
    /**
     * Get amount
     * 
     * @return int
     */
    public function getAmount();

    /**
     * Get currencyCode
     * 
     * @return string
     */
    public function getCurrencyCode();

    /**
     * Get cartId
     * 
     * @return string
     */
    public function getCartId();
}