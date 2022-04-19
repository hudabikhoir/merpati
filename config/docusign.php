<?php

return [

    /**
     * The DocuSign Integrator's Key
     */

    'integrator_key' => 'f2e9593c-5c2c-4fce-bb9f-345a5e59d75f',

    /**
     * The Docusign Account Email
     */
    'email' => 'nur.huda@efishery.com',

    /**
     * The Docusign Account Password
     */
    'password' => 'Kakanda552906',

    /**
     * The version of DocuSign API (Ex: v1, v2)
     */
    'version' => 'v2',

    /**
     * The DocuSign Environment (Ex: demo, test, www)
     */
    'environment' => 'demo',

    /**
     * The DocuSign Account Id
     */
    'account_id' => 'b9e1a006-d1d7-44e3-898b-ba3bfb58ab9e',


    /**
     * Envelope Trait Configs 
     */


    /**
     * Envelope ID field 
     */
    'envelope_field' => 'envelopeId',

    /**
    * Recipient IDs to save tabs for upon creating the Envelope (false = Disabled)
    */
    'save_recipient_tabs' => [1],

    /**
    * Envelope Tabs field
    */
    'tabs_field' => 'envelopeTabs',

    /**
    * Envelope Documents field (false = Disabled)
    */
    'documents_field' => 'templateDocuments',
];

