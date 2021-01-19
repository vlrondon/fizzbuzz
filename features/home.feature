Feature:
  In order to show my skills in PHP
  I want to show a home page with info about the project

  Scenario: I am on home page
    Given I am on "/"
    Then I should see "Fizz Buzz"

  Scenario: I am on home page and I will play
    Given I am on "/"
    When I fill in "from" with "4"
    And I fill in "to" with "45"
    And I press "lets-do-it"
    Then I should see "4" in the "div.first" element
    Then I should see "FizzBuzz" in the "div.last" element