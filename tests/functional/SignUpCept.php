<?php 
$I = new FunctionalTester($scenario);

$I->am('A Guest');
$I->wantTo('want to sign up');

$I->amOnPage('/');
$I->click('Sign Up');

$I->amOnPage('/signup');

$I->fillField('Username:','TestUser');
$I->fillField('Email:','TestUser@test.com');
$I->fillField('Password:','password');
$I->fillField('Password Confirmation:','password');

$I->click('Sign Up');

$I->seeCurrentRouteIs('PagesController@home');

