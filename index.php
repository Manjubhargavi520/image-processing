<html>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <body>
    <center>
        <form id="imageUploadForm" action="uploadImage.php" enctype="multipart/form-data">
            <input name="fileToUpload" type="file"/>
            <input type="submit" name="submit"/>
            <div style="clear: both"></div>
        </form>

        <div id="uploadedImage"></div>
    </center>

</body>
<script src="https://code.jquery.com/jquery-2.1.3.min.js" type="text/javascript"></script>
<script src="js/ajaxUpload.js" type="text/javascript"></script>
</html>