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
<table align="center">
        <tr><td><div class="container1" id="#rcorners2" >

        <div class="header" style="background-color:#20b2aa" align="center" >
                <label><font color="white"> Account Log</label></font><hr>
            </div>
            <div class="data">
                <label> Logged Account user &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   Wait</label><hr>
            </div>
            
         <div class="data2" >
            <div class="header">
                <label> Total User(0)</label>
            </div>      
        </div>   
    </div></td> <td></td>
    <td>
    <div class="container2" id="#rcorners2" style='margin-bottom:275px' align="center" >
            <div class="header" style="background-color:#20b2aa" align="center"  >
                <label><font color="white">Current Chat</label><font><hr>
            </div><hr>
            <div class="data" align="center">
                <textarea id="estimateTerm" cols="30" rows="5" class="textShadow1" ></textarea><hr>
            </div>
        
        <table>
            <div class="da-button-row" class="button"><tr></tr><br>
            <tr><td><input id="message" type="submit" value="Submit" class="button" onclick="return false;"></td>
            </div><td></td><td></td><td></td><td></td><td><br><td></td></td><td></td><td></td><td>
            <div class="da-button-row"></td><td></td><td></td><td><td></td><td></td><td></td><td></td></td><td></td><td></td><td></td><td></td><td>
            <td><input id="message" type="submit" value="End" class="button" onclick="return false;"></td></tr>
            </div>
        </table> 
    </div> </td>
    <td>
    <div class="container1" id="#rcorners2" class="container3">
            <div class="header" style="background-color:#20b2aa" align="center" >
                <label><font color="white"> Off line Messages</label></font><hr>
            </div> 
            <div class="data">
                <label> Click To View &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;   Sent</label><hr>
            </div>
            
                </div>   
    </td> </tr></table>




</div>



     @endsection
<style>
.textShadow1{
height:90px;
width: 250px;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}
.textShadow{
height:25px;
width: 200px;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}

.button {
    color:white;
    background-color:#20B2AA;
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
.container1 {
    width: 300px;
    height:500px;
    border: 1px solid gray;
    radius: 20px;
    padding: 10px;
    margin: 25px;
    border-radius: 25px;
}
.container2 {
    
    width: 300px;
    height:250px;
    border: 1px solid gray;
    radius: 20px;
    padding: 10px;
    margin: 25px;
    border-radius: 25px;
}
.container3 {
    overflow-y:scroll;
    width: 300px;
    height:500px;
  
}
    #rcorners2 {
    border-radius: 25px;
    border: 2px solid gray;
    padding: 20px; 
    width: 100px;
    height: 50px;    

}

</style>



     @section('scripts')




@section('scripts')