Feature: Search for a Field Laborer Job in California paying greater than $11 per hour
  Scenario: Verify Home Page for Seasonal Jobs                              
    Given a web browser is at the SeasonalJobs home page
    Then I get title as "Jobs | SeasonalJobs.dol.gov"
    
  Scenario: Search for Field Laborer Job                                   
    Given a web browser is at the SeasonalJobs home page
    And the user fills in "Field Laborer" for "Search"
    And the user fill in "California" for "Location"
    Then the user should get a result with "Field Laborer"  
    And the user should see the address "ALCo Harvesting, LLC Oceano, CA"
    
