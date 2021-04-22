# behat-browserstack
[Behat](https://github.com/Behat/Behat) Integration with BrowserStack.

![BrowserStack Logo](https://d98b8t1nnulk5.cloudfront.net/production/images/layout/logo-header.png?1469004780)

## Setup
* Clone the repo
* Install dependencies `composer install`
* Update `*.conf.yml` files inside the `config/` directory with your [BrowserStack Username and Access Key](https://www.browserstack.com/accounts/settings)

## Running your tests
- To run a single test, run `composer single`
- To run local tests, run `composer local`
- To run parallel tests, run `composer parallel`

 Understand how many parallel sessions you need by using our [Parallel Test Calculator](https://www.browserstack.com/automate/parallel-calculator?ref=github)


## Notes
* You can view your test results on the [BrowserStack Automate dashboard](https://www.browserstack.com/automate)
* To test on a different set of browsers, check out our [platform configurator](https://www.browserstack.com/automate/php#setting-os-and-browser)
* You can export the environment variables for the Username and Access Key of your BrowserStack account
  
  ```
  export BROWSERSTACK_USERNAME=<browserstack-username> &&
  export BROWSERSTACK_ACCESS_KEY=<browserstack-access-key>
  ```
  
## Additional Resources
* [Documentation for writing Automate test scripts in PHP](https://www.browserstack.com/automate/php)
* [Customizing your tests on BrowserStack](https://www.browserstack.com/automate/capabilities)
* [Browsers & mobile devices for selenium testing on BrowserStack](https://www.browserstack.com/list-of-browsers-and-platforms?product=automate)
* [Using REST API to access information about your tests via the command-line interface](https://www.browserstack.com/automate/rest-api)


# behat-bstack-framework
behat / browserstack integration reusable framework

Requirements:
use https://www.dol.gov/agencies/arb to develop BDD Test Fraamework
- re-usable
- Use common patterns ( Page Object, Page Factory, Single Responsibiliity, etc )
- facilitate faster cycles through test reusability and through speeding up test creation and maintenance
- get a smoke test project set up.
- Create Utilities for On Screen Actions
- Build and Manage Verifications
- Set Up Your Logging & Reporting Mechanism
- providing a reliable way for team members to build automated tests, and get reliable results.
- while choosing a tool and planning automated test framework development it’s critical to analyze next areas:
How will the team be using the framework?
Will they be responsible to write tests from scratch?
Will they be required to modify tests when pushing a change to software?
Is this tool aligned with team’s expertise?
What efforts will be required from an engineer leading framework development to enable and support framework usage by other teammates?

Scope
Keep in mind that not everything can be automated. Basically, you want to automate:
Stable repeatable scenarios with predictable results
Integration of software with external services
UI (to a reasonable level)

There are areas that may have lower ROI if being automated, or should not be covered by automation tests at all:
New features with not finalized requirements
Areas that heavily depend on external services with not predictable results
Flaky areas
Any functionality that requires human interaction which can not be reliably emulated






Design:

Design is a phase of development that defines how easy it will be to use and maintain the framework, what needs will it fulfill, and how it will be implemented. Spending additional day on design will save weeks later.
There are several questions that help during Design phase.
How will the framework be used?


A good framework is:
Reusable
Maintainable
Reliable
Simplifies creation and execution of tests
Aligned to business needs



===== Notes:

Create Wrapper Method :
Writing a wrapper method is one of the genuine solutions for extending the library features. An example of extending the wrapper method is to allow better logging capabilities and handling the errors well in Selenium.

For example, the click() method in selenium can be extended as:

def elementClick(self, locator, locatorType=“id“):
    try:
        element = self.getElement(locator, locatorType)
        element.click()
        self.log.info(“Clicked on element with locator: “ + locator +
        ” locatorType: “ + locatorType)
    return True
    except:
        self.log.info(“Cannot click on the element with locator: “ + locator +
        ” locatorType: “ + locatorType)
    return False


================

Choosing The Right Design Pattern :
Choosing the right design pattern is important and it provides the best practices for creating the test framework. It speeds up the test case development and helps to prevent minor issues that can cause major problems and therefore improves code readability. The most popular design pattern for creating a selenium automation framework is the Page Object Model (POM), it separates UI operations from the functionality and makes the code clean.

There are many advantages of using the Page Object Model that includes,

If any locator makes changes in the project, it is easy to change it in one place.
Reusability of locators
Duplicate locators can be avoided


==================

Create a Proper Folder Structure For The Code :
Always defining the folder structure makes the code readable and makes it easy to understand. The folder can be structured as below,

Testcases
Utilities
Libraries
Logs
Test Data
Constants
PageObjects
Locators

=====================

What is a Framework?
A testing framework is a set of rules or guidelines which are used to create and design test cases. It consists of a combination of right practices and tools which help QA to test the software more effectively and efficiently.

The guidelines or rules for designing a testing framework may include coding standards, handling methods for test data, the process for test results storage, the process for accessing external resources, object repositories, etc.

Here are some of the key benefits of having a test automation framework:

Low maintenance costs
Maximum test coverage
High test speed and efficiency
Reduced manual intervention
Improved test accuracy
High code readability
Higher portability
Code reusability

=============================
How to Build a Test Automation Framework from Scratch
Building an efficient testing automation framework takes time but it is worth the efforts considering the long-term benefits. With a well-built framework in place, the QA team can focus more on actual testing.

You can ensure a mature test automation framework with these steps:

Identify the test cases that are essential to be executed
Configure specialized code analysis and coverage tools to ensure a 100% test coverage
Formalize your test strategy for testing new features into interim builds
Standardize all environments for required testing and automate deployments
Define the exit criteria for each run
Report and fix critical bugs
Set up application monitoring to detect and report key issues earlier
Building a test automation framework from scratch can take up a lot of investment and, if not taken up carefully, it may not bring the benefits it promised if not taken up carefully.

Sometimes, building an automation framework from scratch might not be the best option too. So, before deciding you need to build it from scratch, you should review the frameworks available in the market.

If the frameworks available in the market don’t fulfil your needs then its reasonable to build it from scratch.

When is a Test Automation Framework Beneficial?
It is crucial to know the functionality and requirements of the project in detail because once you know that, it becomes easy to decide which repetitive tasks you need to automate. It’s not that you should jump into automation right away. There are certain criteria which you need to check before using a test automation framework.

When is a test automation framework beneficial?

When there are frequent iterations for regression testing
When repetitive tests are in high amount
When you need to simulate a large number of users
When you don’t rely only on manual test execution to test critical functions
When the application under test is having a stable UI
Before deciding whether you should go for a test automation framework or not, make sure you consider the budget, project environment and technology you are using, and whether your manpower has the right skills required to use automation.
===================
