<?php
namespace Libraries\Intecapi;

use Illuminate\Support\Facades\Log;
use GuzzleHttp\Client;

class CallnotesClient
{

    private $client;
    private $companyCode;
    private $serviceCode;
    private $token;
    private $http;
    private $cache;

    public function __construct( $base_url, $companyCode, $serviceCode, $token )
    {
        $this->companyCode = $companyCode;
        $this->serviceCode = $serviceCode;
        $this->token = $token;
        $this->http = new Client( array( 'base_uri' => $base_url ) );
    }

    private function parseXml( $response )
    {
        $body = $response->getBody()->__toString();
//        log_message( 'DEBUG', 'parseXml $body = ' . $body );
        Log::debug( 'parseXml $body = ' . $body );
        if ( empty( $body ) ) {
            return '';
        }
        return simplexml_load_string( $body );
    }

    private function parseCsv( $response, $enc = "sjis" )
    {
        $rawbody = $response->getBody()->__toString();
        $body = mb_convert_encoding( $rawbody, mb_internal_encoding(), $enc );
        $rows = array_map( "str_csv", explode( PHP_EOL, $body ) );
        return $rows;
    }

    private function handleResponse( $response )
    {
        $sc = $response->getStatusCode();

        switch ( $sc ) {
            case 200:
            case 201:
                return $response;
            case 400:
            case 500:
                $ctstat = $response->getHeader( "X-Ct-Status" );
                $msg = urldecode( implode( ", ", $ctstat ) );
                throw new Exception( "X-Ct-Status: " . $msg );
                break;
        }

        $ctstat = $response->getHeader( "X-Ct-Status" );

        if ( ! empty( $ctstat ) ) {
            $msg = mb_convert_encoding( urldecode( $ctstat ), 'utf-8', 'sjis' );
            throw new Exception( "X-Ct-Status: " . $msg );
        }

        throw new Exception( "Status Code: " . $sc );
    }

    private function _get( $path, $params = array() )
    {
        return $this->handleResponse( $this->http->get( $path, $params ) );
    }

    private function _post( $path, $params = array() )
    {
        return $this->handleResponse( $this->http->post( $path, $params ) );
    }

    private function _put( $path, $params = array() )
    {
        return $this->handleResponse( $this->http->put( $path, $params ) );
    }

    private function _delete( $path, $params = array() )
    {
        return $this->handleResponse( $this->http->delete( $path, $params ) );
    }

    public function get( $clientCd )
    {
        // get
        $path = sprintf( "/%s/%s/clients/%s.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'query' => array(
                'token' => $this->token,
                'client_cd' => $clientCd
            )
        );

        $res = $this->_get( $path, $params );
        return $this->parseXml( $res );
    }

    /**
     *
     */
    public function create( $dat )
    {
        // post
        $path = sprintf( "/%s/%s/clients.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'http_errors' => false,
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function update( $clientCd, $dat = array() )
    {
        // put
        $path = sprintf( "/%s/%s/clients/%s.xml", $this->companyCode, $this->serviceCode, $clientCd );
        Log::debug( $path );

        $params = array(
            'http_errors' => false,
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_put( $path, $params );
        return $this->parseXml( $res );
    }

    public function destroy( $clientCd )
    {
        // delete
        $path = sprintf( "/%s/%s/clients/%s.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'form_params' => array(
                'token' => $this->token
            )
        );
        $res = $this->_delete( $path, $params );
        return $this->parseXml( $res );
    }

    public function stop( $clientCd )
    {
        $path = sprintf( "/%s/%s/clients/stop/%s.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'query' => array(
                'token' => $this->token
            )
        );

        return $this->_get( $path );
    }

    public function restart( $clientCd )
    {
        $path = sprintf( "/%s/%s/clients/restart/%s.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'query' => array( 'token' => $this->token )
        );

        $res = $this->_get( $path );
        return $this->parseXml( $res );
    }

    /*
     *
     * array(
     *   array(
     *     'client_cd' => 'xxxx',
     *     'name' => 'xxx',
     *     'client_number' => 'xxxx',
     *     'cnt_number' => 'xxxx',
     *     'attach_cd' => 'xxxxx',
     *   ),
     * )
     * data  := row | row sep data
     *
     * row   := client_cd delim name delim client_number delim cnt_number delim attach_cd
     * sep    := "\n"
     * delim := ","
     */

    public function toDataString( $rows )
    {
        $delim = ",";
        $sep = PHP_EOL;
        $buf = array();

        foreach ( $rows as $row ) {
            $buf[] = $row[ 'client_cd' ] . $delim . $row[ 'name' ] . $delim . $row[ 'client_number' ] . $delim . $row[ 'cnt_number' ] . $delim . $row[ 'attach_cd' ];
        }

        return implode( $sep, $buf );
    }

    public function createBatch( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/create.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path );
        return $this->parseXml( $res );
    }

    public function updateBatch( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/create.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function toClientCdArrayString( array $clientCodes )
    {
        $sep = PHP_EOL;
        return implode( $sep, $clientCodes );
    }

    public function deleteBatch( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/destroy.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function stopBatch( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/stop.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function restartBatch( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/restart.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function deleteSet( $clientCd, $months )
    {
        $path = sprintf( "/%s/%s/clients_batch/delete_set/%s.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'form_params' => array(
                'token' => $this->token,
                'months' => $months
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function createBatchAsync( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/create_a.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function updateBatchAsync()
    {
        $path = sprintf( "/%s/%s/clients_batch/update_a.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function destroyBatchAsync( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/destroy_a.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function stopBatchAsync( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/stop_a.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function restartBatchAsync( $dat )
    {
        $path = sprintf( "/%s/%s/clients_batch/restart_a.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function getBatchStatus( $acceptId, $listFlg = 0 )
    {
        $path = sprintf( "/%s/%s/clients_batch/status_check.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array(
                'token' => $this->token,
                'accept_id' => $acceptId,
                'list' => $listFlg
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    public function getBatchResultSuccess( $acceptId )
    {
        $path = sprintf( "/%s/%s/clients_batch/success_list.csv", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array(
                'token' => $this->token,
                'accept_id' => $acceptId,
                'list' => $listFlg
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseCsv( $res );
    }

    public function getBatchResultFailure()
    {
        $path = sprintf( "/%s/%s/clients_batch/failure_list.csv", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array(
                'token' => $this->token,
                'accept_id' => $acceptId,
                'list' => $listFlg
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseCsv( $res );
    }

    public function validateNumber()
    {
        $path = sprintf( "/%s/%s/validate_number/check_number.xml", $this->companyCode, $this->serviceCode );
        $params = array(
            'form_params' => array(
                'token' => $this->token
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    /**
     * 転送先電話番号新規登録
     * @param String $clientCd クライアントCD
     * @param array $dat = [transfer_number => '転送先となる電話番号']
     * @return String APIからの戻り値
     */
    public function scheduleTransferNumber( $clientCd, $dat = [] )
    {

        $path = sprintf( "/%s/%s/%s/schedule/transfer/edit_number.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'http_errors' => false,
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    /**
     * スケジュールプラン新規登録
     * @param String $clientCd クライアントCD
     * @param array $dat = ['dow' => '曜日', 'starttime' => '開始時刻', 'endtime' => '終了時刻', 'act' => '動作']
     * @return String APIからの戻り値
     */
    public function schedulePlanCreate( $clientCd, $dat = [] )
    {

        $path = sprintf( "/%s/%s/%s/schedule/plan/create.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'http_errors' => false,
            'form_params' => array_merge( $dat, array( 'token' => $this->token ) )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    /**
     * スケジュールプラン一覧の取得
     * @param String $clientCd クライアントCD
     * @return String APIからの戻り値
     */
    public function schedulePlanList( $clientCd )
    {

        $path = sprintf( "/%s/%s/%s/schedule/plan/list.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'http_errors' => false,
            'form_params' => array(
                'token' => $this->token
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    /**
     * スケジュールプランの削除
     * @param String $clientCd クライアントCD
     * @param String $plan_cd プランCD
     * @return String APIからの戻り値
     */
    public function schedulePlanDelete( $clientCd, $plan_cd )
    {

        $path = sprintf( "/%s/%s/%s/schedule/plan/delete.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'http_errors' => false,
            'form_params' => array(
                'token' => $this->token,
                'plan_cd' => $plan_cd
            )
        );

        $res = $this->_post( $path, $params );
        //return $this->parseXml($res);
        return;
    }

    /**
     * スケジュールプランの一時停止
     * @param String $clientCd クライアントCD
     * @param String $plan_cd プランCD
     * @return String APIからの戻り値
     */
    public function schedulePlanStop( $clientCd, $plan_cd )
    {

        $path = sprintf( "/%s/%s/%s/schedule/plan/stop.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'http_errors' => false,
            'form_params' => array(
                'token' => $this->token,
                'plan_cd' => $plan_cd
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

    /**
     * スケジュールプラン一時停止解除
     * @param String $clientCd クライアントCD
     * @param String $plan_cd プランCD
     * @return String APIからの戻り値
     */
    public function schedulePlanStart( $clientCd, $plan_cd )
    {

        $path = sprintf( "/%s/%s/%s/schedule/plan/start.xml", $this->companyCode, $this->serviceCode, $clientCd );
        $params = array(
            'http_errors' => false,
            'form_params' => array(
                'token' => $this->token,
                'plan_cd' => $plan_cd
            )
        );

        $res = $this->_post( $path, $params );
        return $this->parseXml( $res );
    }

}
