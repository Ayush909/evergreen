<?php
	include_once 'header.php';
?>
<?php
 
    if (!isset($_SESSION['u_id'])) {
        header("Location: index.php");
    }
?>
        <div class="container_catalog">
            <h1 style="text-align: center;">Evergreeen</h1>
            <br/>
            <h2 style="text-align: center;">List of available trees:-</h2>
            <br/>
            <div class="gallery">
                    <img src="images/1.jpg" style="width: 250px; height: 250px;">
                    <img src="images/1.jpg" style="width: 250px; height: 250px;">
                    <img src="images/1.jpg" style="width: 250px; height: 250px;">
                    <img src="images/1.jpg" style="width: 250px; height: 250px;">
                    <img src="images/1.jpg" style="width: 250px; height: 250px;">
                    <img src="images/1.jpg" style="width: 250px; height: 250px;">	
            </div>
            <button class="button" onclick="document.location='shopping.php'">Click here to proceed</button>

        </div>
	    

<?php
	include_once 'footer.php';
?>	
