<?php
	include_once 'header.php';
?>
<?php
 
    if (!isset($_SESSION['u_id'])) {
        header("Location: index.php");
    }
?>
    <div class="container">
        <h1>Shopping Cart</h1>

        <div class="container">
          
  <form action="payment.php">

  <div class="row">
    <div class="col-25">
      <label for="plant">Select Plant</label>
    </div>
    <div class="col-75">
      <select id="plant" name="plant">
        <option value="100">Short - ₹100</option>
        <option value="200">Medium - ₹200</option>
        <option value="300">Tall - ₹300</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="quantity">Quantity</label>
    </div>
    <div class="col-75">
      <input type="number" id="quantity" name="quantity" placeholder="Enter Quantity.." required>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Additional Details</label>
    </div>
    <div class="col-75">
      <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

    </div>
</body>
</html>
