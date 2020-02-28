<?php

use PHPUnit\Framework\TestCase;

class ListingPremiumTest extends TestCase
{

  /** @test */
   function getStatusMethodReturnsPremium()
   { //Test for the getStatus method
       $data = [
           'id' => 1,
           'title' => 'Premium title',
           'status' => 'premium'
       ];

       // new ListingPremium Object
       $PremiumListing = new ListingPremium($data);
       $this->assertEquals('premium', $PremiumListing->getStatus());
   }

   /** @test */
    function getDescriptionMethodReturnsExpectedResults()
    { //Test for getDescription
        $data = [
            'id' => 1,
            'title' => 'Premium title',
            'description' => 'description'
        ];
        $PremiumListing = new ListingPremium($data);
        $this->assertEquals('description', $PremiumListing->getDescription());
    }










} //the end
