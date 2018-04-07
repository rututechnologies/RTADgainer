<?php
namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * @group call_tracking
 */
class CallTracking extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCallNoteRequest()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?> 
                    <root> 
                        <cnt_caller_number>09025914024</cnt_caller_number> 
                        <attach_cd></attach_cd> 
                        <displayed_number>05058940494</displayed_number> 
                        <client_number>0783253151</client_number> 
                        <hangup_code>1</hangup_code> 
                        <uuid_a>6086243a-a9e9-4fba-9422-2c70c86f6cc1</uuid_a> 
                        <cnt_number>123456123123123</cnt_number> 
                        <cnt_caller_number_hash>3ed93eeebd78b4e1a9fc56d70ab7e27e</cnt_caller_number_hash> 
                        <clientcd>42386</clientcd> 
                        <clientname> APC&#65288;&#26085;&#21521;&#65289;&#22618;&#30000;&#36786;&#22580;&#19977;&#23470;&#26412;&#24215; </clientname> 
                        <servicecd>adg</servicecd> 
                        <start_timestamp_a>2018-02-27 21:38:02</start_timestamp_a> 
                        <answer_timestamp_a>2018-02-27 21:38:08</answer_timestamp_a> 
                        <end_timestamp_a>2018-02-27 21:39:30</end_timestamp_a> 
                        <calc_billsec_a>82</calc_billsec_a> 
                        <start_timestamp_b>2018-02-27 21:38:02</start_timestamp_b> 
                        <answer_timestamp_b>2018-02-27 21:38:08</answer_timestamp_b> 
                        <end_timestamp_b>2018-02-27 21:39:30</end_timestamp_b> 
                        <calc_billsec_b>82</calc_billsec_b> 
                    </root> ';

        $ch = curl_init();
         curl_setopt( $ch, CURLOPT_URL, sprintf( '%sjpn_postback_xml.php?send_data=1', 'http://127.0.0.1:8000/' ) ); // set url to post to
    //    curl_setopt( $ch, CURLOPT_URL, sprintf( 'http://rtadgainer.adgainersolutions.com/jpn_postback_xml.php' ) ); // set url to post to
        curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0 );
        curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0 );
        curl_setopt( $ch, CURLOPT_POST, 1 );
        //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: text/xml'));
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array( 'Content-Type: text/plain' ) );
        curl_setopt( $ch, CURLOPT_POSTFIELDS, $xml );
        curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, 'POST' );
        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
        $output = curl_exec( $ch );
        curl_close( $ch );
//        $response = $this->get( '/jpn_postback_xml.php' );
//        $response->assertStatus( 200 );
//        $this->assertNotEmpty( $output );
        error_log($output);
        $this->assertEmpty( $output );
    }

}

