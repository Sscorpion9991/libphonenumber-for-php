<?php
/**
 * This file is automatically @generated by {@link BuildMetadataPHPFromXml}.
 * Please don't modify it directly.
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[1458]\\d{5,9}',
    'PossibleNumberPattern' => '\\d{6,10}',
    'PossibleLength' => 
    array (
      0 => '6',
      1 => '7',
      2 => '9',
      3 => '10',
    ),
    'PossibleLengthLocalOnly' => 
    array (
      0 => '8',
    ),
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '89162\\d{4}',
    'PossibleNumberPattern' => '\\d{8,9}',
    'ExampleNumber' => '891621234',
    'PossibleLength' => 
    array (
      0 => '9',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '14(?:5\\d|71)\\d{5}|4(?:[0-2]\\d|3[0-57-9]|4[47-9]|5[0-25-9]|6[6-9]|7[02-9]|8[147-9]|9[017-9])\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '412345678',
    'PossibleLength' => 
    array (
      0 => '9',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '180(?:0\\d{3}|2)\\d{3}',
    'PossibleNumberPattern' => '\\d{7,10}',
    'ExampleNumber' => '1800123456',
    'PossibleLength' => 
    array (
      0 => '7',
      1 => '10',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '190[0126]\\d{6}',
    'PossibleNumberPattern' => '\\d{10}',
    'ExampleNumber' => '1900123456',
    'PossibleLength' => 
    array (
      0 => '10',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '13(?:00\\d{2})?\\d{4}',
    'PossibleNumberPattern' => '\\d{6,10}',
    'ExampleNumber' => '1300123456',
    'PossibleLength' => 
    array (
      0 => '6',
      1 => '10',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => '500\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '500123456',
    'PossibleLength' => 
    array (
      0 => '9',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => '550\\d{6}',
    'PossibleNumberPattern' => '\\d{9}',
    'ExampleNumber' => '550123456',
    'PossibleLength' => 
    array (
      0 => '9',
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'pager' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'uan' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voicemail' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'noInternationalDialling' => 
  array (
    'NationalNumberPattern' => 'NA',
    'PossibleNumberPattern' => 'NA',
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'CC',
  'countryCode' => 61,
  'internationalPrefix' => '(?:14(?:1[14]|34|4[17]|[56]6|7[47]|88))?001[14-689]',
  'preferredInternationalPrefix' => '0011',
  'nationalPrefix' => '0',
  'nationalPrefixForParsing' => '0',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => false,
);
