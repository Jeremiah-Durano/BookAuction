<?php namespace App\Tests;
use App\Tests\AcceptanceTester;

class HomePageCest
{
    public function homePageContent(AcceptanceTester $I) {

        $I->amOnPage('/');
        $I->see('Home');

    }
    public function homePageLinkToAbout(AcceptanceTester $I) {
        $I->amOnPage('/');
        $I->click('About'); $I->seeInCurrentUrl('/about');
        $I->see('About');

    }
}
