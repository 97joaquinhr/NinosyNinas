<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access website features for logged-in users');
$I->amOnPage('/index.php');
$I->fillField('usuario','juanpi@mail.com');
$I->fillField('password',new \Codeception\Step\Argument\PasswordArgument('ipnuaj'));
$I->click('Enviar');
$I->see('Noticias');