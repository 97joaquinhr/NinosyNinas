<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('login to website');
$I->lookForwardTo('access website features for logged-in users');
$I->amOnPage('/index.php');
$I->fillField('usuario','lalo@mail.com');
$I->fillField('password',new \Codeception\Step\Argument\PasswordArgument('hockey'));
$I->click('Enviar');
$I->see('Calendario');