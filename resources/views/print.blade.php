@extends('layouts.app')
@section('content')


<div class="text-center">


 
   <table class="table text-center" style="width: 280px;">
  
    <tr style="border-bottom-style: solid;">
    	<th class="text-center"><h2>Bond Companies</h2><br><p>House no 71, Road 11<br><p>Banani, Block-D, Dhaka</p></th>
    </tr>
    <!--
    <tr >
    	<th ><img src="<?php //echo $guest[0]->photo; ?>"  width="100px" height="75px"/ >
    	</th>
    </tr> -->
    <tr>
        <th class="text-center">Visitor Id: <?php echo $guest[0]->id; ?></hd>
    </tr>

    <tr>
    	<th class="text-center">Visitor Name: <?php echo $guest[0]->guest_name; ?></hd>
    </tr>

    <tr>
    	<th class="text-center"> Host Name: <?php echo $guest[0]->guest_idcard ; ?></hd>
    </tr>
   
    <tr>
    	<th class="text-center"> Date: <?php echo date("Y-m-d").'<br>' ?> </th>
       
    </tr>

    <tr>

     <th

        class="text-center"> Time: <?php echo date("h:i:sa").'<br>' ?>
            
        </th>
        

    </tr>
   </table>

   <input type="submit" name="print" onclick="myFunction()" value="Print" id="button" class="btn btn-success">

<script type="text/javascript">

function myFunction()

{

  window.print();
} 

</script>


   </div>

@stop