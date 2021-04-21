<?php

require "vendor/autoload.php";

use Behat\Behat\Context\BehatContext,
  Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

class FeatureContext extends BrowserStackContext {
  /** @Given /^I am on "([^"]*)"$/ */
  public function iAmOnSite($url) {
    self::$driver->get($url);
  }

  /** @When /^I search for "([^"]*)"$/ */
  public function iSearchFor($searchText) {
    $element = self::$driver->findElement(WebDriverBy::name("q"));
    $element->sendKeys($searchText);
    $element->submit();
    sleep(5);
  }

  /** @Then /^I get title as "([^"]*)"$/ */
  public function iShouldGet($string) {
    $title = self::$driver->getTitle();
    if ((string)  $string !== $title) {
      throw new Exception("Expected title: '". $string. "'' Actual is: '". $title. "'");
    }
  }

  /** @Then /^I should see "([^"]*)"$/ */
  public function iShouldSee($string) {
    $source = self::$driver->getPageSource();
    if (strpos($source, $string) === false) {
      throw new Exception("Expected to see: '". $string. "'' Actual is: '". $source. "'");
    }
  }

  //new methods ( Phasee -1 ) Apr 21, 2021 ( to be implemented )

  /**
     * @Given /^a web browser is at the SeasonalJobs home page$/
     */
    public function atTheSeasonaljobsHomePage()
    {
        //throw new PendingException();
    }

    /**
     * @Given /^the user fills in "([^"]*)" for "([^"]*)"$/
     */
    public function userFillsInFormSearch($arg1, $arg2)
    {
        //throw new PendingException();
    }

    /**
     * @Given /^the user fill in "([^"]*)" for "([^"]*)"$/
     */
    public function userFillInFormLocation($arg1, $arg2)
    {
        //throw new PendingException();
    }

    /**
     * @Then /^the user should get a result with "([^"]*)"$/
     */
    public function userShouldGetAResultWith($arg1)
    {
        //throw new PendingException();
    }

    /**
     * @Given /^the user should see the address "([^"]*)"$/
     */
    public function userShouldSeeTheAddress($arg1)
    {
        //throw new PendingException();
    }
}