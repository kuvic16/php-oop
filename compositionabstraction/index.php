<?php

class Subscription
{
    public function create()
    {

    }

    public function cancel()
    {

    }

    public function invoice()
    {

    }

    public function swap($newPlan)
    {
        // api request
        // find stripe customer
        // find stripe subscription by customer   
    }
}

class BillableSubscription extends Subscription{
    protected function findStripeCustomer()
    {

    }

    protected function findStripeSubscriptionByCustomer()
    {

    }
}