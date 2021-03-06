<?php

namespace Aisel\AddressingBundle\Features\Context\Admin;

use Aisel\ResourceBundle\Features\Context\SonataAdminContext;

/**
 * Behat CRUD for addressing entities
 */
class FeatureContext extends SonataAdminContext
{

    /**
     * @When /^I'm logged in as backend user$/
     */
    public function IamBackendUser()
    {
        $this->doBackendLogin();
    }

    /**
     * @When /^I visit city list route admin_aisel_addressing_city_list$/
     */
    public function browseToCityListRoute()
    {
        $this->getSession()->visit($this->generateUrl('admin_aisel_addressing_city_list', array('_locale' => 'en')));
        $this->assertSession()->statusCodeEquals(200);
    }

    /**
     * @When /^I visit region list route admin_aisel_addressing_region_list$/
     */
    public function browseToRegionListRoute()
    {
        $this->getSession()->visit($this->generateUrl('admin_aisel_addressing_region_list', array('_locale' => 'en')));
        $this->assertSession()->statusCodeEquals(200);
    }

    /**
     * @When /^I visit country list route admin_aisel_addressing_country_list$/
     */
    public function browseToCountryListRoute()
    {
        $this->getSession()->visit($this->generateUrl('admin_aisel_addressing_country_list', array('_locale' => 'en')));
        $this->assertSession()->statusCodeEquals(200);
    }

    /**
     * @Given /^I should see list of rows$/
     */
    public function iSeeListOfRows()
    {
        $element = $this->showList();
        assertNotEmpty($element->getText());
    }

    /**
     * @Given /^I click on "Show" button and see details$/
     */
    public function iSeeEntityDetails()
    {
        $element = $this->showButtonClick();
        assertNotEmpty($element->getText());
    }

    /**
     * @Given /^I click on "Edit" button and see edit form$/
     */
    public function iSeeEditForm()
    {
        $element = $this->editButtonClick();
        assertNotEmpty($element->getText());
    }

    /**
     * @Given /^I click on "Delete" button and see confirmation$/
     */
    public function iSeeConfirmationMessage()
    {
        $element = $this->deleteButtonClick();
        assertNotEmpty($element->getText());
    }

}
