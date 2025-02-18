<?php

import('classes.handler.Handler');

class PaymentApiStatusPageHandler extends Handler {

    /**
     * Constructor
     */
    function __construct() {
        parent::__construct();
    }

    /**
     * Display payment status for authors
     * @param $args array
     * @param $request PKPRequest
     */
    function paymentStatus($args, $request) {
        $submissionId = (int) array_shift($args);
        $plugin = PluginRegistry::getPlugin('generic', 'paymentApiClient');
        $status = $plugin->getPaymentStatus($submissionId);

        $templateMgr = TemplateManager::getManager($request);
        $templateMgr->assign('paymentStatus', $status);
        $templateMgr->display($plugin->getTemplatePath() . 'statusPage.tpl');
    }
}
