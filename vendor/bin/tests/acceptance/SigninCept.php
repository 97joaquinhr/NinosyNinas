<?php
/**
 * Created by PhpStorm.
 * User: joaqu
 * Date: 3/19/2018
 * Time: 2:20 PM
 */
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access website features for logged-in users');
$I->amOnPage('/index.php');
$I->fillField('usuario','suzana@mail.com');
$I->fillField('password','123456');
$I->click('submit');
$I->see('Nuevos Comentarios!');