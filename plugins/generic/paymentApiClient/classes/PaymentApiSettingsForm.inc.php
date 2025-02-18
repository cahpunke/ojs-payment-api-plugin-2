<?php

import('lib.pkp.classes.form.Form');

class PaymentApiSettingsForm extends Form {

    /** @var int The context ID */
    var $contextId;

    /**
     * Constructor
     * @param $contextId int
     */
    function __construct($contextId) {
        $this->contextId = $contextId;
        parent::__construct('plugins/generic/paymentApiClient/templates/settingsForm.tpl');

        // Add form validation checks
        $this->addCheck(new FormValidator($this, 'apiUrl', 'required', 'plugins.generic.paymentApiClient.settings.apiUrlRequired'));
        $this->addCheck(new FormValidator($this, 'apiToken', 'required', 'plugins.generic.paymentApiClient.settings.apiTokenRequired'));
        $this->addCheck(new FormValidatorPost($this));
    }

    /**
     * Initialize form data
     */
    function initData() {
        $plugin = PluginRegistry::getPlugin('generic', 'paymentApiClient');
        $settings = $plugin->getPaymentSettings($this->contextId);

        $this->_data = array(
            'apiUrl' => $settings['apiUrl'],
            'apiToken' => $settings['apiToken'],
        );
    }

    /**
     * Assign form data to user-submitted data
     */
    function readInputData() {
        $this->readUserVars(array('apiUrl', 'apiToken'));
    }

    /**
     * Save settings
     */
    function execute() {
        $plugin = PluginRegistry::getPlugin('generic', 'paymentApiClient');
        $plugin->savePaymentSettings($this->contextId, $this->getData());
    }
}
