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
    'version' => '2.5.0',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
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
    'version' => '2.2.6',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'documentationUrl' => 'https://github.com/craftcms/contact-form/blob/v2/README.md',
    'components' => 
    array (
      'mailer' => 'craft\\contactform\\Mailer',
    ),
  ),
  'rias/craft-contact-form-extensions' => 
  array (
    'class' => 'rias\\contactformextensions\\ContactFormExtensions',
    'basePath' => $vendorDir . '/rias/craft-contact-form-extensions/src',
    'handle' => 'contact-form-extensions',
    'aliases' => 
    array (
      '@rias/contactformextensions' => $vendorDir . '/rias/craft-contact-form-extensions/src',
    ),
    'name' => 'Contact Form Extensions',
    'version' => '1.2.0',
    'schemaVersion' => '1.0.0',
    'description' => 'Adds extensions to the Craft CMS contact form plugin.',
    'developer' => 'Rias',
    'developerUrl' => 'https://rias.be',
    'changelogUrl' => 'https://raw.githubusercontent.com/riasvdv/craft-contact-form-extensions/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'contactFormExtensionsService' => 'rias\\contactformextensions\\services\\ContactFormExtensionsService',
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
    'version' => '3.2.2.1',
    'description' => 'The most comprehensive proximity search and mapping tool for Craft.',
    'developer' => 'Double Secret Agency',
    'developerUrl' => 'https://www.doublesecretagency.com/plugins',
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
    'version' => '1.0.9',
    'description' => 'Authorize.net payment gateway plugin for Craft Commerce 2',
    'developer' => 'Digital Pros',
    'developerUrl' => 'https://digitalpros.co/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/digitalpros/commerce-authorize',
    'changelogUrl' => 'https://raw.githubusercontent.com/digitalpros/commerce-authorize/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/digitalpros/commerce-authorize/archive/master.zip',
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
    'version' => '3.0.5',
    'description' => 'An amazingly powerful and flexible e-commerce platform for Craft CMS.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://craftcommerce.com',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://docs.craftcms.com/commerce/v2/',
  ),
);
