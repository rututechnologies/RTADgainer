<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Account;
use DB;
use App\User;

class AccountController extends Controller
{
    protected $view_directory_name = "v1.Account.";

    /**
     * Get account list according to user id
     * Account_model::getAccounts()
     * TODO: add account_id parameter
     */
    public function getAccounts( $user_id = '' )
    {
        $accounts = array();
        if ( !empty( $user_id ) ) {
            // get user by id
            $user = User::find( $user_id );
            if ( !$user ) {
                return array();
            }
        } else {
            // get loggedin user id
            $user = Auth::user();
            if ( $user ) {
                $user_id = $user->id;
            } else {
                // unauthenticated
                return array();
            }
        }

        // get attach_accounts from user
        $accounts = array();
        if ( isset( $user->attach_accounts ) ) {
            $attach_accounts = explode( ',', $user->attach_accounts );
            $accounts = array_merge( $accounts, $attach_accounts );
        }

        // add self account_id from user
        array_push( $accounts, $user->account_id );

        // get accounts
        $account_list = Account::whereIn( 'account_id', $accounts )->orderBy( 'accountName' )->get();
        return $account_list;
    }

    /**
     * TODO: add get account agent if level = 5
     */
    public function getAccountAgent( $user_id = '' )
    {
        
    }

    public function accounts_list()
    {
        $accountsList = Account::all();
        return view( $this->view_directory_name . 'account', compact( 'accountsList' ) );
    }

    public function search_account( Request $request )
    {
        $username = trim( $request->username );
        $email = trim( $request->email );

        $accountsList = Account::Search( $username, $email )->get();

        return view( $this->view_directory_name . 'micros.account_list', compact( 'accountsList' ) );
    }

    public function save_account_general( Request $request )
    {
        DB::beginTransaction();
        try {
            $account = new Account();
            $account->accountName = $request->account_name;
            $user_data = User::where( 'username', $request->username )->first();
            $user_data->username = $request->username;
            $user_data->password = $request->password;
            $user_data->save();
            $account->tel = $request->telephone;
            $account->contact = $request->contact;
            $account->email = $request->email;
            $account->address = $request->address1;
            $account->address2 = $request->address2;
            $account->country = $request->country;
            $account->state = $request->state;
            $account->city = $request->city;
            $account->zip = $request->zipcode;
            if ( $account->save() ) {
                $account->accountName = $request->account_name;

                $account->billing_type = $request->billing_type;
                $account->billing_date = $request->billing_date;
                $account->name_on_card = $request->name_on_card;
                $account->card_number = $request->card_number;
                $account->exp_m = $request->expiration_month;
                $account->exp_y = $request->expiration_year;
                $account->cvv = $request->cvv;
                $account->billing_address_1 = $request->address_as_location;
                $account->billing_address_2 = $request->billing_address1;
                $account->billing_city = $request->city;
                $account->billing_state = $request->state;
                $account->billing_zip = $request->zip;
                $account->billing_country = $request->country;
                $account->save();
            }
            DB::commit();
            $accountsList = Account::all();
            return view( $this->view_directory_name . 'micros.account_list', compact( 'accountsList' ) );
        } catch ( \Exception $e ) {
            DB::rollBack();
            dd( $e );
        }
    }

    public function delete_account_general( Request $request )
    {
        try {
            DB::beginTransaction();
            $account_id = $request->account;
            if ( $account = Account::find( $account_id ) ) {
                $account->delete();
                DB::commit();
                $accountsList = Account::all();
                return view( $this->view_directory_name . 'micros.account_list', compact( 'accountsList' ) )->render();
            } else {
                return response( 'invalid', 422 );
            }
        } catch ( Exception $e ) {
            DB::rollback();
            \Log::info( $e );
            return response( 'Error', 500 );
        }
    }

    public function edit_account_general( Request $request )
    {
        $account_id = $request->account;
        //query select only personal details
        $account = Account::where( 'id', $account_id )
            ->first();

        $htm = View( $this->view_directory_name . 'micros.account_edit_form', compact( 'account' ) )->render();
        $title = 'Edit account';
        return response( array( 'content' => $htm, 'title' => $title ) );
    }

    public function update_account_general( Request $request )
    {
        $account = Account::find( $request->account );
        $account->accountName = $request->account_name;
        $account->username = $request->username;
        $account->password = $request->password;
        $account->tel = $request->telephone;
        $account->contact = $request->contact;
        $account->email = $request->email;
        $account->address = $request->address1;
        $account->address2 = $request->address2;
        $account->country = $request->country;
        $account->state = $request->state;
        $account->city = $request->city;
        $account->zip = $request->zipcode;
        if ( $account->save() ) {
            $accountsList = Account::all();
            return view( $this->view_directory_name . 'micros.account_list', compact( 'accountsList' ) )->render();
        } else {
            return response( 'No accounts found' );
        }
    }

    // This function is used to store the billing information

    public function save_billing_information( Request $request )
    {

        DB::beginTransaction();
        try {
            $account = new Account();
            $account->billing_type = $request->billing_type;
            $account->billing_date = $request->billing_date;
            $account->name_on_card = $request->name_on_card;
            $account->card_number = $request->card_number;
            $account->exp_m = $request->expiration_month;
            $account->exp_y = $request->expiration_year;
            $account->cvv = $request->cvv;
            $account->billing_address_1 = $request->address_as_location;
            $account->billing_address_2 = $request->billing_address1;
            $account->billing_city = $request->city;
            $account->billing_state = $request->state;
            $account->billing_zip = $request->zip;
            $account->billing_country = $request->country;
            $account->save();
            DB::commit();
            $accountsList = Account::all();
            return view( $this->view_directory_name . 'micros.account_list', compact( 'accountsList' ) );
        } catch ( Exception $e ) {
            DB::rollback();
            dd( $e );
        }
    }

    public function userAccountsMgmt()
    {
        return view( $this->view_directory_name . 'micros.userAccountMgmt' );
    }

    public function Translation()
    {
        return view( $this->view_directory_name . 'micros.userAccountMgmt' );
    }

}
