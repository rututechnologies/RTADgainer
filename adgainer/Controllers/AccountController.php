<?php
namespace Adgainer\Controllers;

use Adgainer\Models\Account;
use Adgainer\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    protected $viewDir = 'adgainer.accounts';

    /**
     * Account list page.
     * 
     * Old system related URL:
     * https://adgainersolutions.com/adgainer/account/getAccounts
     * 
     * Old system related files:
     * application/views/account/accounts.php
     * application/controllers/Account::getAccounts
     * 
     */
    public function index()
    {
        $accounts = $this->getAccounts();
        return view( "{$this->viewDir}.index", [ 'accounts' => $accounts ] );
    }

    /**
     * Account details page.
     * 
     * @param string $account_id
     */
    public function details( $account_id )
    {
        $account = Account::where( 'account_id', $account_id )->first();
        return view( "{$this->viewDir}.details", [ 'account' => $account ] );
    }

    /**
     * Edit Account page.
     * 
     * @param string $account_id
     */
    public function edit( $account_id )
    {
        /*
         * TODO: Get account details and display form
         */
        return view( "{$this->viewDir}.edit" );
    }

    /**
     * Submitted edit form.
     * Save to database and return to edit form with alert
     */
    public function editSubmit( Request $request )
    {
        /*
         * TODO: Get submitted form fields and save to database
         */
    }

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

}
