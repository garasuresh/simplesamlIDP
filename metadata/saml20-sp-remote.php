<?php
/**
 * SAML 2.0 remote SP metadata for simpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example simpleSAMLphp SAML 2.0 SP
 */
/*
$metadata['https://saml2sp.example.org'] = array(
	'AssertionConsumerService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
	'SingleLogoutService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
);

/*
 * This example shows an example config that works with Google Apps for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address
 * at Google Apps. In example, if your google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
/*
$metadata['google.com'] = array(
	'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
	'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
	'simplesaml.nameidattribute' => 'uid',
	'simplesaml.attributes' => FALSE,
);
*/

$metadata['http://simplesamlsp:85/simplesaml/module.php/saml/sp/metadata.php/default-sp'] = array (
  'SingleLogoutService' => 
  array (
    0 => 
    array (
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
      'Location' => 'http://simplesamlsp:85/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
    ),
  ),
  'AssertionConsumerService' => 
  array (
    0 => 
    array (
      'index' => 0,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
      'Location' => 'http://simplesamlsp:85/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    1 => 
    array (
      'index' => 1,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
      'Location' => 'http://simplesamlsp:85/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
    ),
    2 => 
    array (
      'index' => 2,
      'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
      'Location' => 'http://simplesamlsp:85/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    ),
    3 => 
    array (
      'index' => 3,
      'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
      'Location' => 'http://simplesamlsp:85/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
    ),
  ),
  'certData' => 'MIIDVTCCAj2gAwIBAgIJAOKSyWxG//J6MA0GCSqGSIb3DQEBCwUAMEExCzAJBgNVBAYTAlVLMQ8wDQYDVQQIDAZMb25kb24xITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDAeFw0xNTA4MDcwOTQxNTdaFw0yNTA4MDYwOTQxNTdaMEExCzAJBgNVBAYTAlVLMQ8wDQYDVQQIDAZMb25kb24xITAfBgNVBAoMGEludGVybmV0IFdpZGdpdHMgUHR5IEx0ZDCCASIwDQYJKoZIhvcNAQEBBQADggEPADCCAQoCggEBALYxr5DjwbUCXQ81lymJdCoqzLMjqKeUNxGWGkZtXRjp4bwYl6drPjg0SVT6+MjjU1Ngt9I/v5A4diaKohvyUhvmHbTfbpYyuIWTx6SIR6tEdpYQDreuR2hGmXCyLXGK9ndMozPtCLllxUMbWYrJB00Q92TSvvE3LqVHqV/GKzOZQndArbiHLU1kwmtXxt8H4sFZUeMlDyzP2Trew3rUTcaLxT6ennGN5XeibhwjCzQ405bncROnokMuFpgvV1013Ho+wdq1sx7OV6tHzwCaJNKeVf7fWOMI4neHA6D/rJnM5XKL+qdmUjx60LDnYHThvOBC9z7+3D+nbd+w4EPNQlcCAwEAAaNQME4wHQYDVR0OBBYEFOa+sqvwclruW5d9pXwEfTuGvioDMB8GA1UdIwQYMBaAFOa+sqvwclruW5d9pXwEfTuGvioDMAwGA1UdEwQFMAMBAf8wDQYJKoZIhvcNAQELBQADggEBAFwkKofpdx6QccGb6hC++AUkh3GdnqJRdO0vsq5jFFgqp20YBfOIovYsAI9ENSIg3y6RPIn64p+whk07f+3g8ym4NFiwE/LT5f93pdC1sZB1sP6fotWRi7wBpufkibMw4vN70r9F86q3CVq29fgTMEW3bqD00QAl5i1ybyZm4Xgd450PVEikEKQmMyS6l82c7pAzjUrzpgSXbtCQu5FC2t5ArKLOuOIRr5LTZPWvrgw2BManZjBKbZEaRJWzYSLmnuyDRPbXaIbo0zUBE+Nma8Pqpng6I0rrPoquPy0mQT+b/co2b8QK8shfZeX0RN+6QSzXEntlCzTxGkhpJHEqhFE=',
);
