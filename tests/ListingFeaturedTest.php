<?php

use PHPUnit\Framework\TestCase;

class ListingFeaturedTest extends TestCase
{

  /** @test */
   function getStatusMethodReturnsFeatured()
   { //Test for the getStatus method
       $data = [
           'id' => 1,
           'title' => 'Featured title',
           'status' => 'featured'
       ];
       $FeaturedListing = new ListingFeatured($data);
       $this->assertEquals('featured', $FeaturedListing->getStatus());
   }

/** @test */
    function getCocMethodReturnResults()
    {//Test for the getCoc method
        $data = [
            'id' => 1,
            'title' => 'Featured title',
            'coc' => 'coc'
        ];
        $FeaturedListing = new ListingFeatured($data);
        $this->assertEquals('coc', $FeaturedListing->getCoc());
    }



} //the end
