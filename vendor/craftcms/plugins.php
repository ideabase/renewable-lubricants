<?php

$vendorDir = dirname(__DIR__);
$rootDir = dirname(dirname(__DIR__));

return array (
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.6.1',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor/blob/v2/README.md',
  ),
  'craftcms/contact-form' => 
  array (
    'class' => 'craft\\contactform\\Plugin',
    'basePath' => $vendorDir . '/craftcms/contact-form/src',
    'handle' => 'contact-form',
    'aliases' => 
    array (
      '@craft/contactform' => $vendorDir . '/craftcms/contact-form/src',
    ),
    'name' => 'Contact Form',
    'version' => '2.2.7',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/contact-form/blob/v2/README.md',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'doublesecretagency/craft-smartmap' => 
  array (
    'class' => 'doublesecretagency\\smartmap\\SmartMap',
    'basePath' => $vendorDir . '/doublesecretagency/craft-smartmap/src',
    'handle' => 'smart-map',
    'aliases' => 
    array (
      '@doublesecretagency/smartmap' => $vendorDir . '/doublesecretagency/craft-smartmap/src',
    ),
    'name' => 'Smart Map',
    'version' => '3.3.2',
    'description' => 'The most comprehensive proximity search and mapping tool for Craft.',
    'developer' => 'Double Secret Agency',
    'developerUrl' => 'https://www.doublesecretagency.com/plugins',
    'documentationUrl' => 'https://www.doublesecretagency.com/plugins/smart-map/docs',
  ),
  'craftcms/commerce' => 
  array (
    'class' => 'craft\\commerce\\Plugin',
    'basePath' => $vendorDir . '/craftcms/commerce/src',
    'handle' => 'commerce',
    'aliases' => 
    array (
      '@craft/commerce' => $vendorDir . '/craftcms/commerce/src',
      '@craftcommercetests/fixtures' => $vendorDir . '/craftcms/commerce/tests/fixtures',
    ),
    'name' => 'Craft Commerce',
    'version' => '3.1.7',
    'description' => 'Create beautifully bespoke ecommerce experiences',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://craftcommerce.com',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://docs.craftcms.com/commerce/v2/',
  ),
  'digital-pros/commerce-authorize' => 
  array (
    'class' => 'digitalpros\\commerce\\authorize\\Plugin',
    'basePath' => $vendorDir . '/digital-pros/commerce-authorize/src',
    'handle' => 'commerce-authorize',
    'aliases' => 
    array (
      '@digitalpros/commerce/authorize' => $vendorDir . '/digital-pros/commerce-authorize/src',
    ),
    'name' => 'Authorize.net for Craft Commerce',
    'version' => '1.0.12',
    'description' => 'Authorize.net payment gateway plugin for Craft Commerce 3',
    'developer' => 'Digital Pros',
    'developerUrl' => 'https://digitalpros.co/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/digitalpros/commerce-authorize',
    'changelogUrl' => 'https://raw.githubusercontent.com/digitalpros/commerce-authorize/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/digitalpros/commerce-authorize/archive/master.zip',
  ),
  'hybridinteractive/craft-contact-form-extensions' => 
  array (
    'class' => 'rias\\contactformextensions\\ContactFormExtensions',
    'basePath' => $vendorDir . '/hybridinteractive/craft-contact-form-extensions/src',
    'handle' => 'contact-form-extensions',
    'aliases' => 
    array (
      '@rias/contactformextensions' => $vendorDir . '/hybridinteractive/craft-contact-form-extensions/src',
    ),
    'name' => 'Contact Form Extensions',
    'version' => '1.2.1',
    'schemaVersion' => '1.0.1',
    'description' => 'Adds extensions to the Craft CMS contact form plugin.',
    'developer' => 'Hybrid Interactive',
    'developerUrl' => 'https://hybridinteractive.io',
    'documentationUrl' => 'https://github.com/hybridinteractive/craft-contact-form-extensions/blob/master/README.md',
    'changelogUrl' => 'https://github.com/hybridinteractive/craft-contact-form-extensions/blob/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'contactFormExtensionsService' => 'rias\\contactformextensions\\services\\ContactFormExtensionsService',
    ),
  ),
);
