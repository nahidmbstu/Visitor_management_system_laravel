<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
    
    <video id="video" width="640" height="480" autoplay></video>
    <button id="snap">Snap Photo</button>
    <canvas id="canvas" width="640" height="480"></canvas>

    <button onclick="convertCanvasToImage()">dowload image</button>

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
          
          document.write('<img id="img" src="'+img+'"  download="filename.jpg"/>');

          var img =  document.getElementById("img");
          var url = img.src.replace(/^data:image\/[^;]/, 'data:application/octet-stream');
          window.open(url);

        }



    </script>

  </body>
</html>
