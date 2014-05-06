<?php

namespace Eo\SetefiBundle\Payment;

/**
 * AbstractPayment
 */
class AbstractPayment
{
    /**
     * @var int
     */
    protected $amount;

    /**
     * @var string
     */
    protected $currencyCode;

    /**
     * @var string
     */
    protected $cartId;

    /**
     * @var string
     */
    protected $language = 'ITA';

    /**
     * @var string
     */
    protected $fullName;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $description;

    /**
     * Set amount
     *
     * @param  int  $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set currencyCode
     *
     * @param  string $currencyCode
     * @return self
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;

        return $this;
    }

    /**
     * Get currency
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set cartId
     *
     * @param  string $cartId
     * @return self
     */
    public function setCartId($cartId)
    {
        $this->cartId = $cartId;

        return $this;
    }

    /**
     * Get cartId
     *
     * @return string
     */
    public function getCartId()
    {
        return $this->cartId;
    }

    /**
     * Set language
     *
     * @param  string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set fullName
     *
     * @param  string $fullName
     * @return self
     */
    public function setFullName($fullName)
    {
        $this->fullName = $fullName;

        return $this;
    }

    /**
     * Get fullName
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->fullName;
    }

    /**
     * Set email
     *
     * @param  string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set description
     *
     * @param  string   $description
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }
}