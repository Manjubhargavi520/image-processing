<!--author:manju bhargavi
date:29-12-2014
purpose:UI for resize,crop,watermarking an image
-->
<!DOCTYPE html>
<html>
	<head>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="myscript.js">
		</script>
		<style> 
		
			#panelpresize,#flipresize{
			padding:5px;
			text-align:center;
			background-color:#e5eecc;
			border:solid 1px #c3c3c3;
			}
			
			#panelpresize{
			color:red;
			padding:50px;
			background-color:black;
			display:none;
			}
			
			#panelwatermark,#flipwatermark{
			padding:5px;
			text-align:center;
			background-color:#e5eecc;
			border:solid 1px #c3c3c3;
			}
			
			#panelwatermark{
			color:red;
			padding:50px;
			background-color:black;
			display:none;
			}
			
			#panelcrop,#flipcrop{
			padding:5px;
			text-align:center;
			background-color:#e5eecc;
			border:solid 1px #c3c3c3;
			}
			
			#panelcrop{
			color:red;
			padding:50px;
			display:none;
			background-color:black;
			}
			
			#blockresizepre{
				display: none;
				background-color:orange;
				breadth : 100%; 
			}
			#blockresizenonpre{
				background-color:orange;
				display: none;
			}
			
			#blockwatermarkimg{
				background-color:orange;
				display: none;
			}
			#blockwatermarktext{
				background-color:orange;
				display: none;
			}
			#cropimage{
				background-color:orange;
			}
			
		</style>
		
	</head>
	<body>
	 
		<div id="flipresize">Resize</div>
		<div id="panelpresize">
			<center>
				<form>
					<table>
							<tr>
								<td>Resizing Image:</td>
								<td>Yes:<input type = "radio" name = "par" id = "par" onclick = "presize()" ></td>
								<td>No:<input type = "radio" name = "par" id = "dpar" onclick = "nonpreserve()" ></td>
							</tr>
						</table>
				</form>
			</center>
			<div id = "blockresizepre">
					<center>
						<form>
							<table>
								<tr>
									<td>what amount to be preserved:<input type="text" name="preserve" ><td>
								</tr>
								<tr>
								    <td><center><input type="submit" value = "submit"></center></td>
								</tr>
							</table>
						</form>
					</center>
			</div>
			<div id = "blockresizenonpre">
					<center>
						<form>
							<table>
								<tr>
									<td>lenght:<input type="text" name="len"></td>
								</tr>
								<tr>
									<td>breadth:<input type="text" name="breadth"></td>
								</tr>
								<tr>
								    <td><center><input type="submit" value = "submit"></center></td>
								</tr>
							</table>
						</form>
					</center>
			</div>
		</div>
		
		<div id="flipwatermark">Water Mark</div>
		<div id="panelwatermark">
			<center>
					<form>
						<table>
							<tr>
								<td>Water Mark:</td>
								<td>Image:<input type = "radio" name = "data" id = "par" onclick = "image()" ></td>
								<td>text:<input type = "radio" name = "imee" id = "imee" onclick = "nonimg()" ></td>
							</tr>
						</table>
					</form>
			</center>
			<div id = "blockwatermarkimg">
					<center>
						<form>
							<table>
								<tr>
									<td>Image:<input type="text" name="len"></td>
								</tr>
								<tr>
									<td><center><input type="submit" value="submit" name="breadth"></center></td>
								</tr>
							</table>
						</form>
					</center>
			</div>
			<div id = "blockwatermarktext">
					<center>
						<form>
							<table>
								<tr>
									<td>Text:<input type="text" name="len"></td>
								</tr>
								<tr>
									<td><center><input type="submit" value="submit" name="breadth"></center></td>
								</tr>
							</table>
						</form>
					</center>
			</div>
		</div>	
		<div id = "flipcrop">Crop Image</div>
		<div id = "panelcrop">
			<div id = "cropimage">
				<center>
						<form action = "" method = "post">
							<table>
								<tr>
									<td><center>Crop Image:</center></td>
								</tr>
								<tr>
									<td>Length:<input type = "text" name = "lencrop" id = "lencrop"  ></td>
								</tr>
								<tr>
									<td>Breadth:<input type = "text" name = "breadthcrop" id = "imee" ></td>
								</tr>
								<tr>
									<td><center><input type = "button"  value = "submit" name = "breadthcrop" id = "imee" ></center></td>
								</tr>
							</table>
						</form>
				</center>
			</div>
		</div>		
	</body>
</html>
