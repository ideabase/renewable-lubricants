<?php

$vendorDir = dirname(__DIR__);

return array (
  'wbrowar/adminbar' => 
  array (
    'class' => 'wbrowar\\adminbar\\AdminBar',
    'basePath' => $vendorDir . '/wbrowar/adminbar/src',
    'handle' => 'admin-bar',
    'aliases' => 
    array (
      '@wbrowar/adminbar' => $vendorDir . '/wbrowar/adminbar/src',
    ),
    'name' => 'Admin Bar',
    'version' => '3.1.6',
    'schemaVersion' => '3.1.0',
    'description' => 'Front-end shortcuts for clients logged into Craft CMS.',
    'developer' => 'Will Browar',
    'developerUrl' => 'https://wbrowar.com/plugins/adminbar',
    'documentationUrl' => 'https://github.com/wbrowar/craft-3-adminbar/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/wbrowar/craft-3-adminbar/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => false,
    'components' => 
    array (
      'bar' => 'wbrowar\\adminbar\\services\\Bar',
      'editLinks' => 'wbrowar\\adminbar\\services\\EditLinks',
    ),
  ),
  'craftcms/commerce' => 
  array (
    'class' => 'craft\\commerce\\Plugin',
    'basePath' => $vendorDir . '/craftcms/commerce/src',
    'handle' => 'commerce',
    'aliases' => 
    array (
      '@craft/commerce' => $vendorDir . '/craftcms/commerce/src',
    ),
    'name' => 'Craft Commerce',
    'version' => '2.0.0-beta.15',
    'description' => 'An amazingly powerful and flexible e-commerce platform for Craft CMS.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://craftcommerce.com',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/commerce-docs',
  ),
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
    'version' => '2.3.2',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor',
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
    'version' => '2.2.3',
    'description' => 'Add a simple contact form to your Craft CMS site',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/contact-form',
    'changelogUrl' => 'https://raw.githubusercontent.com/craftcms/contact-form/v2/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/craftcms/contact-form/archive/v2.zip',
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
    'version' => '1.1.4',
    'schemaVersion' => '1.0.0',
    'description' => 'Adds extensions to the Craft CMS contact form plugin.',
    'developer' => 'Rias',
    'developerUrl' => 'https://rias.be',
    'documentationUrl' => 'https://github.com/Rias500/craft-contact-form-extensions/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/Rias500/craft-contact-form-extensions/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'contactFormExtensionsService' => 'rias\\contactformextensions\\services\\ContactFormExtensionsService',
    ),
  ),
);
