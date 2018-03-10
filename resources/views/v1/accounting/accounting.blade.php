@extends('layouts.app')
@section('title',' ')

@section('style')


@endsection

@section('content')
<div class="wrapper border-bottom white-bg page-heading">
        <div class="col-md-3">
            <div class="row">
                <h1 class="module_heading">
                <span>
                    Campaign
                </span>
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="{{url('/dashboard')}}"><i
                                    class="fa fa-dashboard"></i> Dashboard</a>
                    </li>

                    <li class="active">
                        <strong><i class="fa fa-list"></i> Campaign</strong>
                    </li>
                </ol>
            </div>
        </div>


         
    </div>
<div class="w3-container">
<div style='margin-left:80px'>
<div class="da-panel-widget">

                            <h4>Date Range</h4>
                            Start Date: <br><input type='date' id='date1' value="02/01/2018"/> <br/>
                            End Date:<br> <input type='date' id='date2' value="02/28/2018"/></br/><br/>
                            <button id='accountingAll' class="button">Update</button>
                            <ul class="da-summary-stat"></ul>
                        </div>
                

                
                    <div class="clear"></div>

                    <div class="grid_4">
                        <div class="da-panel collapsible ">
<br/>
                            <div class="da-panel-header">
                                    <span class="da-panel-title" >
                                        <img src="https://testenvadgainer.adgainersolutions.com/adgainer/application/images/icons/black/16/list.png" alt=""/>
                                        <b>Accounting Overview </b>
                    <span style="float:right"> <b>Search:<b> <input type="text" id="search_accounting"/> </span>
                                    </span>

                                <div class="clear"><br></div>

                                <button id="accounting_gen_report" class="button" onclick="return false;">CSV</button>
                                <select class='shortSel' id='conv_type' name='conv_type'>
                                    <option value='UTF-8'>UTF-8 (English)</option>
                                    <option value='SJIS-win'>Shift-JIS (Japanese)</option>
                                </select>


                                <br><br>Page:
                                <b>1</b><a href="https://testenvadgainer.adgainersolutions.com/adgainer/accounting/?date1=02/01/2018&date2=02/28/2018&limit=5&amp;start=5" data-ci-pagination-page="2"></a><b>2<b><a href="https://testenvadgainer.adgainersolutions.com/adgainer/accounting/?date1=02/01/2018&date2=02/28/2018&limit=5&amp;start=10" data-ci-pagination-page="3"></a><b>3</b><a href="https://testenvadgainer.adgainersolutions.com/adgainer/accounting/?date1=02/01/2018&date2=02/28/2018&limit=5&amp;start=15" data-ci-pagination-page="4"></a><b>4</b><a href="https://testenvadgainer.adgainersolutions.com/adgainer/accounting/?date1=02/01/2018&date2=02/28/2018&limit=5&amp;start=5" data-ci-pagination-page="2" rel="next">&gt;</a><a href="https://testenvadgainer.adgainersolutions.com/adgainer/accounting/?date1=02/01/2018&date2=02/28/2018&limit=5&amp;start=1455" data-ci-pagination-page="292"></a><b>Last</b> &rsaquo;
                            </div>


                            <div class="tableContainer" style="clear:both;" >
                            <div class="scrollit">
                                <table cellpadding=10% id="customers" >
                                    
                                    <tr>
                                        <td>Account</td>
                                        
                                        <td>Total Campaigns</td>
                                        <td>Total Visits</td>
                                        <td>Total Minutes</td>
                                        <td>Time Zone   </td>
                                        
                                    </tr>
                                    
                                    
                                    <tr>
                                                            <td>
                                                                <a href='https://testenvadgainer.adgainersolutions.com/adgainer/accounting/getAccountDetails/?account_id=34f6eae94cbdb502333af787fafeef24'>
                                                                    01394????IDEA 
                                                                </a>
                                                            </td>
                                                            
                                                            <td>1 </td> 
                                                            <td>0 </td> 
                                                            <td >0 </td> 
                                                            <td >Asia/Tokyo </td> 
                                                            
                                                         </tr>
                                                         <tr class='table-data-column_alt accounting_search_parent'>
                                                            <td class=' table-data-column_alt tall_line_height accounting_search' style='text-align:left;padding:0 0 0 5px'>
                                                                <a href='https://testenvadgainer.adgainersolutions.com/adgainer/accounting/getAccountDetails/?account_id=a4c4de12bd21e608f12020582ba29fd7'>
                                                                    03???
                                                                </a>
                                                            </td>
                                                            
                                                            <td data-offset='17' data-timezone='Asia/Tokyo' data-date1='02/01/2018' data-date2='02/28/2018' data-date12='2018-01-31 07:00:00' data-date22='2018-02-28 07:00:00' class=' table-data-column_alt tall_line_height'>3 </td> 
                                                            <td class=' table-data-column_alt tall_line_height'>0 </td> 
                                                            <td class=' table-data-column_alt tall_line_height'>0 </td> 
                                                            <td class=' table-data-column_alt tall_line_height'>Asia/Tokyo </td> 
                                                            
                                                         </tr><tr class=' accounting_search_parent'>
                                                            <td class='  tall_line_height accounting_search' style='text-align:left;padding:0 0 0 5px'>
                                                                <a href='https://testenvadgainer.adgainersolutions.com/adgainer/accounting/getAccountDetails/?account_id=ce51474101e7683aea52c73d9dc5731b'>
                                                                    1000 SLS4_EL
                                                                </a>
                                                            </td>
                                                            
                                                            <td data-offset='17' data-timezone='Asia/Tokyo' data-date1='02/01/2018' data-date2='02/28/2018' data-date12='2018-01-31 07:00:00' data-date22='2018-02-28 07:00:00' class='  tall_line_height'>1 </td> 
                                                            <td class='  tall_line_height'>0 </td> 
                                                            <td class='  tall_line_height'>0 </td> 
                                                            <td class='  tall_line_height'>Asia/Tokyo </td> 
                                                            
                                                         </tr><tr class='table-data-column_alt accounting_search_parent'>
                                                            <td class=' table-data-column_alt tall_line_height accounting_search' style='text-align:left;padding:0 0 0 5px'>
                                                                <a href='https://testenvadgainer.adgainersolutions.com/adgainer/accounting/getAccountDetails/?account_id=d15d611d5f2435518bd243de3c27b181'>
                                                                    1002???????·????????
                                                                </a>
                                                            </td>
                                                            
                                                            <td data-offset='17' data-timezone='Asia/Tokyo' data-date1='02/01/2018' data-date2='02/28/2018' data-date12='2018-01-31 07:00:00' data-date22='2018-02-28 07:00:00' class=' table-data-column_alt tall_line_height'>1 </td> 
                                                            <td class=' table-data-column_alt tall_line_height'>0 </td> 
                                                            <td class=' table-data-column_alt tall_line_height'>0 </td> 
                                                            <td class=' table-data-column_alt tall_line_height'>Asia/Tokyo </td> 
                                                            
                                                         </tr><tr class=' accounting_search_parent'>
                                                            <td class='  tall_line_height accounting_search' style='text-align:left;padding:0 0 0 5px'>
                                                                <a href='https://testenvadgainer.adgainersolutions.com/adgainer/accounting/getAccountDetails/?account_id=ce0f436cb38dd583b44ba3b59578ff8c'>
                                                                    1003 OS_AF_independent
                                                                </a>
                                                            </td>
                                                            
                                                            <td data-offset='17' data-timezone='Asia/Tokyo' data-date1='02/01/2018' data-date2='02/28/2018' data-date12='2018-01-31 07:00:00' data-date22='2018-02-28 07:00:00' class='  tall_line_height'>1 </td> 
                                                            <td class='  tall_line_height'>0 </td> 
                                                            <td class='  tall_line_height'>0 </td> 
                                                            <td class='  tall_line_height'>Asia/Tokyo </td> 
                                                            
                                                         </tr>                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="clear"></div>
                </div>


    </div>


@endsection
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
.textShadow1{
height:25px;
width: 200px;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}

.button {
     color:white;
    background-color:#20b2aa;
    padding: 5px 12px;
    text-align: center;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    border-radius:10px;
    box-shadow: 5px 5px 5px -2px rgba(0,0,0,0.6);
}
.button:hover{
border-radius:10px;
    box-shadow: 5px 5px 5px -2px rgba(0,0,0,0.9);

}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
    .btn-grid
{
    margin: -2px 0;
}

.btn-grid > .btn
{
    margin: 5px 0;
}
}
.scrollit {
    overflow:scroll;
    height:300px;
}

</style>


@section('scripts')

@endsection