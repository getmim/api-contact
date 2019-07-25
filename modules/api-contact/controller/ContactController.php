<?php
/**
 * ContactController
 * @package api-contact
 * @version 0.0.1
 */

namespace ApiContact\Controller;

use LibForm\Library\Form;
use Contact\Library\Contact;

class ContactController extends \Api\Controller
{

    public function createAction() {
        if(!$this->app->isAuthorized())
            return $this->resp(401);

        $form = new Form('api-contact');

        if(is_null($fields = $form->validate()))
            return $this->resp(422, $form->getErrors());

        if(!Contact::add((array)$fields))
            return $this->resp(500);

        $this->resp(0, 'success');
    }
}