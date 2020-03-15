<?php

class Subscription
{
    protected $gateway;

    public function __construct(Gateway $gateway){
        $this->gateway = $gateway;
    }

    public function create()
    {

    }

    public function cancel()
    {
        // api request
        $customer = $this->gateway->findCustomer();
        // find stripe customer
        // find stripe subscription by customer   
    }

    public function invoice()
    {

    }

    public function swap($newPlan)
    {
        
    }
}

interface Gateway
{
    public function findCustomer();
    public function findSubscriptionByCustomer();
}

class StripeGateway implements Gateway{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

class BraintreeGateway implements Gateway{
    public function findCustomer()
    {

    }

    public function findSubscriptionByCustomer()
    {

    }
}

new Subscription(new StripeGateway());
new Subscription(new BraintreeGateway());