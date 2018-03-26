@extends('layouts.app')
@section('title','Message Center')

@section('style')
<style>
.textShadow{
height:25px;
width: 150px;
box-shadow:inset 0px 0px 10px rgba(0,0,0,0.3);
}
.textShadow1{
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
	height:300px;
    border: 1px solid gray;
	radius: 20px;
    padding: 10px;
    margin: 25px;	
	border-radius: 25px; 
}
	#rcorners2 {
    border-radius: 25px;
    border: 2px solid gray;
    padding: 20px; 
    width: 100px;
    height: 50px;    

}
</style>

@endsection

@section('content')
<div class="da-panel-header" style="margin-left:130px">
		<h5>ADgainer</h5>
		<br/><hr align="left" width="50%">
		<label>User</label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
		<label>cgibbs</label><br/></br>
		</div>
<br/>
	<table align="center">
		<tr><td><div class="container1" id="#rcorners2"  >

		<div class="header" style="background-color:#20b2aa" align="center" >
				<label><font color="white"> Chat Queue</label></font><hr>
			</div>
			<div class="data">
				
				<select id="abc" class="textShadow">
				<option value="0">View Dept Queue</option>
				<option value="1">No Department</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<label>Wait</label>
			</div>
			<br>
			<div class="data2" >
			<div class="header">
				<label> Total Chats(0)</label>
			</div>		
		</div>	 
	</div></td> <td></td>
	<td>
	<div  style='margin-bottom:220px'>
    <div class="container2" id="#rcorners2" align="center" style="overflow-x:scroll">
			<div class="header" style="background-color:#20b2aa" align="center" >
				<label><font color="white"> Current Chat</label></font><hr>
			</div>
		
			<table style='margin-top:200px'>
			<tr><td><div >
			<select id="abc" class="textShadow1">
				<option value="0">Transfer to Department</option>
				</select>
			</div></td>
			<td><div >
			<input id="message" type="submit" value="Transfer" class="button" onclick="return false;">
			</div></td></tr>
			</table>
		 
	</div></div> </td>
	<td>
	<div class="container1" id="#rcorners2"style="overflow-x: scroll">
			<div class="header" style="background-color:#20b2aa" align="center" >
				<label><font color="white"> Pre-Generated Message</label></font><hr>
			</div> 
			<div class="data">
				<label> Click Message  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; | &nbsp; &nbsp; &nbsp;   </label><hr>
			</div>
			<label>Welcome, how can I help you? </label>
		 		</div>	 
	</td> </tr></table>





@endsection


@section('scripts')

@endsection