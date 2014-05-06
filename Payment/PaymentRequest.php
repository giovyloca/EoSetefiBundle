<?php

namespace Eo\SetefiBundle\Payment;

/**
 * PaymentRequest
 */
class PaymentRequest extends AbstractPayment implements PaymentRequestInterface
{
    /**
     * @var string
     */
    protected $returnUrl;

    /**
     * @var string
     */
    protected $recoveryUrl;

    /**
     * Class constructor
     *
     * @param int    $amount
     * @param string $cartId
     * @param string $returnUrl
     * @param string $recoveryUrl
     */
    public function __construct($amount, $cartId, $returnUrl, $recoveryUrl)
    {
        $this->amount      = $amount;
        $this->cartId      = $cartId;
        $this->returnUrl   = $returnUrl;
        $this->recoveryUrl = $recoveryUrl;
    }

    /**
     * Get completeUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Get cancelUrl
     *
     * @return string
     */
    public function getRecoveryUrl()
    {
        return $this->recoveryUrl;
    }
}