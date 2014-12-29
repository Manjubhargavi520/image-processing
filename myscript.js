$(document).ready(function(){
		  $("#flipresize").click(function(){
		    $("#panelpresize").slideToggle("slow");
		  });
		});
		
		$(document).ready(function(){
		  $("#flipwatermark").click(function(){
		    $("#panelwatermark").slideToggle("slow");
		  });
		});
		
		$(document).ready(function(){
		  $("#flipcrop").click(function(){
		    $("#panelcrop").slideToggle("slow");
		  });
		});
		
		function presize()
			{
		
				document.getElementById("blockresizepre").style.display = "block";
				document.getElementById("blockresizenonpre").style.display = "none"
			}

            function nonpreserve()
			{
			
				document.getElementById("blockresizenonpre").style.display = "block";
				document.getElementById("blockresizepre").style.display = "none";
			}
			function image()
			{
		
				document.getElementById("blockwatermarkimg").style.display = "block";
				document.getElementById("blockwatermarktext").style.display = "none";
			}
			function nonimg()
			{
				document.getElementById("blockwatermarktext").style.display = "block";
				document.getElementById("blockwatermarkimg").style.display = "none";
			}