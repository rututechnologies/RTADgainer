<?php
namespace Libraries\Intecapi;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

//require 'CallnotesClient.php';

class CallnotesWebService
{

    private $companyCode;
    private $serviceCode;
    private $credentials;
    private $http;
    private $token;
    private $expires;

    const BASE_URI = 'http://testapi2.callnotes.jp/';

//    const BASE_URI = 'https://api1.callnotes.jp';

    public function __construct( $params )
    {
        $this->companyCode = $params[ 'company_code' ];
        $this->serviceCode = $params[ 'service_code' ];
        $this->credentials = array(
            'account' => $params[ 'account' ],
            'password' => $params[ 'password' ]
        );
        $base_uri = $params[ 'base_uri' ];

        $this->http = new Client( array( 'base_uri' => $base_uri, 'http_errors' => false ) );
    }

    public function getServiceClient()
    {
        $path = sprintf( "/%s/%s/auth.xml", $this->companyCode, $this->serviceCode );
//        log_message('DEBUG', $path);
        Log::debug( $path );

        $params = array(
            'form_params' => array(
                'account' => $this->credentials[ 'account' ],
                'password' => $this->credentials[ 'password' ]
            )
        );

        try {
            $res = $this->http->post( $path, $params );
        } catch ( \Exception $ex ) {
            Log::error( $ex->getMessage() );
            return false;
        }

        $sc = $res->getStatusCode();

        if ( $sc == 200 ) {
            $d = simplexml_load_string( $res->getBody() );
            return new CallnotesClient( $this->http->getConfig( 'base_uri' ), $this->companyCode, $this->serviceCode, $d->token->__toString() );
        }

        if ( $sc == 401 ) {
//            log_message('ERROR', 'unauthorized.');
            Log::error( 'unauthorized.' );
        }
        return false;
    }

}
