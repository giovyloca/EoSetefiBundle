<?php

/*
 * This file is part of the EoSetefi package.
 *
 * (c) 2014 Eymen Gunay <eymen@egunay.com>
 */

namespace Eo\SetefiBundle;

use Eo\SetefiBundle\Payment\PaymentRequestInterface;
use Guzzle\Http\Client as Guzzle;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Setefi client
 */
class Client
{
    protected $endpoint;
    protected $id;
    protected $password;

    /**
     * Class constructor
     * 
     * @param string $endpoint
     * @param string $id
     * @param string $password
     */
    public function __construct($endpoint, $id, $password)
    {
        $this->endpoint = $endpoint;
        $this->id = $id;
        $this->password = $password;
    }

    /**
     * Create payment url
     *
     * @param  PaymentRequestInterface $paymentRequest
     * @return string
     */
    public function createPaymentUrl(PaymentRequestInterface $paymentRequest)
    {
        $client = new Guzzle();

        $parameters = array(
            'id' => $this->id,
            'password' => $this->password,
            'operationType' => 'initialize',
            'amount' => $paymentRequest->getAmount(),
            'currencyCode' => $paymentRequest->getCurrencyCode(),
            'language' => $paymentRequest->getLanguage(),
            'responseToMerchantUrl' => $paymentRequest->getReturnUrl(),
            'recoveryUrl' => $paymentRequest->getRecoveryUrl(),
            'merchantOrderId' => $paymentRequest->getCartId(),
            'cardHolderName' => $paymentRequest->getFullName(),
            'cardHolderEmail'  => $paymentRequest->getEmail(),
            'description' => $paymentRequest->getDescription()
        );

        $request = $client->post($this->endpoint, array(), $parameters);
        $response = $request->send();

        $response = new \SimpleXMLElement($response->getBody());
        $paymentId = $response->paymentid;
        $paymentUrl = $response->hostedpageurl;
        $securityToken = $response->securitytoken;

        return "$paymentUrl?PaymentID=$paymentId";
    }

    /**
     * Resolve notification parameters
     *
     * @param  array    $parameters
     * @return Response
     */
    public function resolveNotification($parameters)
    {
        $resolver = new OptionsResolver();
        $resolver->setRequired(array(
            "authorizationcode",
            "cardcountry",
            "cardexpirydate",
            "customfield",
            "maskedpan",
            "merchantorderid",
            "paymentid",
            "responsecode",
            "result",
            "rrn",
            "securitytoken",
            "threedsecure"
        ));

        return $resolver->resolve($parameters);
    }

    /**
     * Generate notification response
     *
     * @param  string   $url
     * @return Response
     */
    public function generateNotificationResponse($url)
    {
        return new Response($url);
    }
}