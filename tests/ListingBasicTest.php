<?php

use PHPUnit\Framework\TestCase;

class ListingBasicTest extends TestCase
{
//Tests for the ListingBasic class to ensure that all three exceptions are tested for.

//method to test whether an exception is thrown by the code under test

  /** @test */
  function constructMustContainData()
  { //test for missing data set exception
     $this->expectException(Exception::class);
     // new ListingBasic Object
     $listing = new ListingBasic();
  }
  /** @test */
  function idMustBeSet()
  { //test for invalid ID exception
     $this->expectException(Exception::class);
     $data = [
            'id' => null,
            'title' => 'Title'
        ];

    $listing = new ListingBasic($data);
  }
  /** @test */
  function titleMustBeSet()
  { //test for invalid title exception
     $this->expectException(Exception::class);
     $data = [
            'id' => 1,
            'title' => null
        ];

    $listing = new ListingBasic($data);
  }



  /** @test */
  function getStatusMethodReturnsBasic()
  { //Tests the getStatus method
       $data = [
           'id' => 1,
           'title' => 'Title',
           'status' => 'basic'
       ];
       $listing = new ListingBasic($data);
       $this->assertEquals('basic', $listing->getStatus());
   }

   //Tests getting the individual properties of the class
   //ListingBasic class to ensure that the get method
   //for each property is returning the expected
   //results: id, title, website, email, twitter

   /** @test */
  function getMethodReturnId()
  {
        $data = [
            'id' => 1,
            'title' => 'Title'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals($data['id'], $listing->getId());
    }

    /** @test */
  function getMethodReturnTitle()
  {
    $data = [
        'id' => 1,
        'title' => 'Title'
    ];
    $listing = new ListingBasic($data);
    $this->assertEquals($data['title'], $listing->getTitle());
  }

  /** @test */
  function getMethodReturnWebsite()
  {
    $data = [
        'id' => 1,
        'title' => 'Title',
        'website' => 'http://mailchimp.com'
    ];
    $listing = new ListingBasic($data);
    $this->assertEquals($data['website'], $listing->getWebsite());
  }

  /** @test */
  function getMethodReturnEmail()
  {
    $data = [
        'id' => 1,
        'title' => 'Title',
        'email' => 'mbcode@gmail.com'
    ];
    $listing = new ListingBasic($data);
    $this->assertEquals($data['email'], $listing->getEmail());
  }

  /** @test */
  function getMethodReturnTwitter()
  {
    $data = [
        'id' => 1,
        'title' => 'Title',
        'twitter' => 'mbcode'
    ];
    $listing = new ListingBasic($data);
    $this->assertEquals('mbcode', $listing->getTwitter());
  }

//test for the ListingBasic class to ensure that the toArray method
//returns an array where each item equals the expected results:
//id, title, website, email, twitter.


  /** @test */
  function toArrayMethod()
  { //Tests the toArray method
        $listing = new ListingBasic(
          ['id'=> 1,
          'title'=>'Title',
          'website'=>'http://www.mailchimp.com',
          'email'=>'mbcode@gmailcom',
          'twitter'=>'mbcode']
        );
        $this->assertEquals(['id'=>1,
        'title'=>'Title',
        'website'=>'http://www.mailchimp.com',
        'email'=>'mbcode@gmailcom',
        'twitter'=>'mbcode',
        'status'=>'basic'
      ],
        $listing->toArray());
  }



  /** @test */
  function objectCreated()
  {
        $data = [
            'id' => 1,
            'title' => 'Test Title'
        ];
        $listing = new ListingBasic($data);
        $this->assertIsObject($listing);
  }

  /** @test */
  function statusIsSet()
  {

    $data = [
        'id' => 1,
        'title' => 'Title',
        'status' => 'basic'
    ];

    $listing = new ListingBasic($data);
    $this->assertNotEmpty($listing->getStatus());
}

/** @test */
    function isStatusEmpty()
    {
        // The data
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'status' => ''
        ];

        // Passing the data to instance of the class for testing
        $listing = new ListingBasic($data);

        // Assertions
        $this->assertNotEmpty($listing->getStatus());
    }

    /** @test */
    function websiteNull()
    {
          $data = [
              'id' => 1,
              'title' => 'Test Title',
              'website' => ''
          ];
          $listing = new ListingBasic($data);
          $this->assertNull($listing->getWebsite());
    }

      /** @test */
    function websiteAddsHttp()
    {
        $data = [
            'id' => 1,
            'title' => 'Test Title',
            'website' => 'mailchimp.com'
        ];
        $listing = new ListingBasic($data);
        $this->assertEquals('http://mailchimp.com', $listing->getWebsite());
    }



} //the end
