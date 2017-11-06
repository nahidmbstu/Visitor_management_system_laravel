@extends('layouts.app')
@section('content')
    
    <dir class="container">
    	
    
	<h3 >Register new Guest</h3>
	<p>change the http:// to https:// </p>
	{!! Form::open(array('url'=>'guest', 'files' => true )) !!}
	<table class="table table-bordered" >
		<tr>
			<td style="width:20% "><strong>Visitor Name:</strong></td>
            <td style="width:80% ">{!! Form::text('guest_name',null,['class'=>'form-control']) !!}</td> 
			
		</tr>
		<tr>						
			<td ><strong>Host Name:</strong></td>
			<td>{!! Form::text('guest_idcard',null,['class'=>'form-control']) !!}</td>
		</tr>
		<tr>
			<td><strong> Address</strong></td>
			<td>{!! Form::textarea('guest_drivelic',null,['class'=>'form-control']) !!}</td>
		
		
		<tr>
			<td><strong>Company:</strong></td>
			<td>{!! Form::text('guest_company',null,['class'=>'form-control']) !!}</td> 
		</tr>
		<tr>
		    <td><strong>Telephone:</strong></td>
			<!-- -->
			<td>{!! Form::text('guest_phone',null,['class'=>'form-control']) !!}</td>
		</tr>
		<tr>
			<td><strong>Photo:</strong></td>

			<td>
            {!! Form::text('photo',null,['class'=>'form-control',

            'id'=>'imageBase64' , 'capture' => 'camera']) 
            !!}
            </td>


		</tr>
		<tr>
			
			

            


          
		</tr>

		<tr>
			<!-- <td><input class="form-control" id="imageBase64" type="text" value="hello" name=""></td> -->
		</tr>
		
		<tr>
             <td colspan="2"><strong>Note:</strong></td>
		</tr>
		<tr>
			<td colspan="2">
				{!! Form::textarea('note',null,['class'=>'form-control']) !!}
			</td>
		</tr>
		
		<tr>
			<td colspan="2" align="center">
							  {!! Form::submit('Save',['class'=>'btn btn-success']) !!}
							  {!! link_to('guest','Back',['class'=>'btn btn-warning']) !!}
						   </td>
		</tr>						
	</table>
	{!! Form::close() !!}

    
	    <div class="camera" style="background: #eee;">

	         
	        <div class="container">

	        <div style="float: left; ">

	        <video id="video" width="640" height="480" autoplay></video>
		    
		    </div>

		    <div style="float: right; ">
		    <canvas id="canvas" width="600" height="480"></canvas>

		    </div>

		    </div>

		    <div>
		    	
		    	
		    </div>

		    <div class="text-center">

		    <button class="btn btn-success"   id="snap">Snap Photo</button>

		    <button class="btn btn-success" onclick="convertCanvasToImage()">Save Photo</button>

		    </div>

		    <script type="text/javascript">
			      // Grab elements, create settings, etc.
			      var video = document.getElementById('video');

			      // Get access to the camera!
			      if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
			          // Not adding `{ audio: true }` since we only want video now
			          navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
			              video.src = window.URL.createObjectURL(stream);
			              video.play();
			          });
			      }



			      // Elements for taking the snapshot
			      var canvas = document.getElementById('canvas');
			      var context = canvas.getContext('2d');
			      var video = document.getElementById('video');

			      // Trigger photo take
			      document.getElementById("snap").addEventListener("click", function() {
			        context.drawImage(video, 0, 0, 640, 480);
			      });
			</script>


		    <script type="text/javascript">
		      
		        function convertCanvasToImage(canvas) {

		          var canvas = document.getElementById("canvas");
		          var img    = canvas.toDataURL("application/octet-stream");
		          
		          // document.write('<img id="img" src="'+img+'"  download="filename.jpg"/>');

		          document.getElementById("imageBase64").value = img;
		        }



		    </script>
		
			
		</div>
	
    </dir>

@stop