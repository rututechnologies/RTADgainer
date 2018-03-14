<?php
// http://oyohk9xpg7wu.adgainersolutions.com/projects/adgainer/wiki/Accounts_for_external_services

//$config['base_uri'] = "http://testapi2.callnotes.jp/";
$config['base_uri'] = "https://api1.callnotes.jp/";



$config['accounts'] = array(
    array(
        'base_uri' => $config['base_uri'],
        'company_code' => 'adgainer',
        'service_code' => 'adg',
        'account' => 'api-adg001',
        'password' => 'W8$xs%1Y',
        //'account' => 'api-adg_dev',
        //'password' => 'apiadg01!',
        'support_number' => '050',
        'support_cd' => '050',
        'rec' => false,
        'ivr' => false
    ),
    array(
        'base_uri' => $config['base_uri'],
        'company_code' => 'adgainer',
        'service_code' => 'adg050-ivr',
        'account' => 'apiadg050-ivr',
        'password' => 'BY68@ks?',
        'support_number' => '050',
        'support_cd' => '050ivr',
        'rec' => false,
        'ivr' => true
    ),
    array(
        'base_uri' => $config['base_uri'],
        'company_code' => 'adgainer',
        'service_code' => 'adg-rec',
        'account' => 'api-adg-rec',
        'password' => 'Fj9_jDb#',
        'support_number' => '050',
        'support_cd' => '050rec',
        'rec' => true,
        'ivr' => false
    ),
    array(
        'base_uri' => $config['base_uri'],
        'company_code' => 'adgainer',
        'service_code' => 'adg0120',
        'account' => 'api-adg0120',
        'password' => '6_vEU#r4',
        //'account' => 'api-adg0120_dev',
        //'password' => 'apiadg012001!',
        'support_number' => '0120',
        'support_cd' => '0120',
        'rec' => false,
        'ivr' => false
    ),
    array(
        'base_uri' => $config['base_uri'],
        'company_code' => 'adgainer',
        'service_code' => 'adg0120-rec',
        'account' => 'apiadg0120-rec',
        'password' => 'U%7F!4ht',
        'support_number' => '0120',
        'support_cd' => '0120rec',
        'rec' => true,
        'ivr' => false
    ),
    array(
        'base_uri' => $config['base_uri'],
        'company_code' => 'adgainer',
        'service_code' => 'adg0800',
        'account' => 'api-adg0800',
        'password' => 'K$pC11l!',
        //'account' => 'api-adg0800_dev',
        //'password' => 'apiadg080001!',
        'support_number' => '0800',
        'support_cd' => '0800',
        'rec' => false,
        'ivr' => false
    ),
    array(
        'base_uri' => $config['base_uri'],
        'company_code' => 'adgainer',
        'service_code' => 'adg0800-rec',
        'account' => 'api-adg0800-rec',
        'password' => 'vp#4GNY_',
        'support_number' => '0800',
        'support_cd' => '0800rec',
        'rec' => true,
        'ivr' => false
    ),
);

