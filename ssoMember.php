<?php

/*
    Implementation Notes:
    1) Change the API credentials
    2) Insert your Private Key
    3) Define your $member
    4) Run script from Composer directory for autoloading to work
        [composer]# php vendor/abenity/abenity-php/examples/ssoMember.php
*/

// Include autoloader (from Composer)
require 'vendor/autoload.php';

// Define Abenity API Credentials. Replace these with your values.
define('ABENITY_API_USERNAME', 'WonderDads');
define('ABENITY_API_PASSWORD', '8aeg^fhsjC');
define('ABENITY_API_KEY', 'yodmzvmphip3fRfpwdqdohvpcqtdnzrr');

// Create new Abenity object
// $abenity = new \Abenity\ApiClient(ABENITY_API_USERNAME, ABENITY_API_PASSWORD, ABENITY_API_KEY, 2, 'sandbox');
$abenity = new \Abenity\ApiClient(ABENITY_API_USERNAME, ABENITY_API_PASSWORD, ABENITY_API_KEY);

// Define your private key, probably read in from a file.
// $privatekey = file_get_contents('/home/daniel/.ssh/id_rsa_abenity');
$privatekey = '-----BEGIN OPENSSH PRIVATE KEY-----
b3BlbnNzaC1rZXktdjEAAAAABG5vbmUAAAAEbm9uZQAAAAAAAAABAAABFwAAAAdzc2gtcn
NhAAAAAwEAAQAAAQEAu6vXbGMkla3Q+k7YecZ9N9kbEKUF+2LyEhO6nmL+sg3TIKz1uNyZ
PuXL2UJ3zEaxAu9FxILZybJA7ATpaVxHtBUx4t9KDnETXjW87T5GNk13VPUWwJh3xnlJEC
y51cj2EyM7S0IN9Dy9XBaBqoj9EwXOamJew299ZsUB/QKpa+MmK6zn2YkND7WD+N4Wig88
cC/S67/4z9DetO2xKuDXKRB/Qo3SBODRD2kkDxkLWzSKmuxJu1iQMNIIp4aOWgQGIl2CDj
02vbgEHDlyb7vv2Uh+yeA3V1EwaON1PzbjH0U76lqk8nMrCmz/0p8Qt1faQ3n/RCC6Fu64
Jp+Uw8YDIwAAA9jC/bZhwv22YQAAAAdzc2gtcnNhAAABAQC7q9dsYySVrdD6Tth5xn032R
sQpQX7YvISE7qeYv6yDdMgrPW43Jk+5cvZQnfMRrEC70XEgtnJskDsBOlpXEe0FTHi30oO
cRNeNbztPkY2TXdU9RbAmHfGeUkQLLnVyPYTIztLQg30PL1cFoGqiP0TBc5qYl7Db31mxQ
H9Aqlr4yYrrOfZiQ0PtYP43haKDzxwL9Lrv/jP0N607bEq4NcpEH9CjdIE4NEPaSQPGQtb
NIqa7Em7WJAw0ginho5aBAYiXYIOPTa9uAQcOXJvu+/ZSH7J4DdXUTBo43U/NuMfRTvqWq
TycysKbP/SnxC3V9pDef9EILoW7rgmn5TDxgMjAAAAAwEAAQAAAQEAq20UolUNngvf0EUl
SFcfGlyedF3JUQ/Yvtp2pScYL9yg9kAHVI1tDh8qTZKBi38nQd7+g7pi5fKFixIRg8RfWw
fhQbNlGjv/zRaZNLyltgSc9GXMGrEq94jiTHwOZFHlNSYBi4US6f5xmiSU3Qm04iNzoYmp
tiupCK78WfiMeZa6cPR//jA9Pzu2fdD9dls7Q+l7hGBYgm+E2CmvL1pCdpUg86f4uiGTLO
GXuWTdJhHZLyIQT02oIhCk2brVvRevCDH2blR7BAEcScQ1EcOA7BRl+UMpkPAXLJHD9YPT
A3RarxxfeKJmj8fOGQxFWVkdbOJoD+HByqyGDCbJQHiBAQAAAIEAgxfFF0e2n315vkzDPY
FBiAcR3o40T2R3bmSobYgVlGdrygvki4MXWeFp9xYFPaJEsCQRw3bWGH3qUZLfGXl7Ee1o
osOWQhVTSfKpB52hEmxyz6sYJF3n4CB0bImzOtwkGWNAqhELSwaEHKFivFY0SHg5k1ibVq
aUoR7XGSaYD78AAACBAOqnCZ7LdP5qmKUYg/cCuERi/lgaI/2LxInph8EHQ1Uchdai4K42
Zy2/maHAg4ldTA+2376nfLq7vWWoWdJApd2cb/QC2pdyI18lbZ91hlS8rsPK5vnNah1Z4k
ubGJT1sVDkk4csmub6GO7Uvg8zed9zYBlKNkyLGsPm0U9C3nGxAAAAgQDMvqE6ib/q/97A
3ezfsafWJvfNez6ZYGirYjS+3vtourYBgA/ARzILzGLeqd+L3cESglzw86QJzRoUtB4PgW
oDB08qFDvAwFvjJam4ioIoipDTrAqkQaRln62m0l9Wg1DN5PB7uowU6XAGloSKb+3Bli7Q
cqNdYTVZcS+CifaDEwAAACBkYW5pZWwuY2FuZGlhQGNsb3VkY29kZXJsYWJzLmNvbQE=
-----END OPENSSH PRIVATE KEY-----';

// Set member profile
$member = array(
    'creation_time' => date('c'),
    'salt' => rand(0,100000),
    'send_welcome_email' => 1,
    'client_user_id' => '1',
    'email' => 'daniel.candia@cloudcoderlabs.com',
    'firstname' => 'Daniel',
    'lastname' => 'Candia',
    // 'address' => '2134 Main Street',
    // 'city' => 'Irvine',
    // 'state' => 'CA',
    'zip' => '92620',
    'country' => 'US'
);

// Attempt to SSO a member
$abenity_response = $abenity->ssoMember($member, $privatekey);

if( isset($abenity_response->status) ){

    // Test verifiction
    if( $abenity_response->status == 'ok' ){

        // Display the login link
        var_dump($abenity_response->data) . "\n";

    }else{

        // Handle $abenity_response->error ...
        var_dump($abenity_response->error);

    }

}