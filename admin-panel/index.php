<?php require "layouts/header.php"; ?>
<?php require "../config/config.php"; ?>

<?php 

 if(!isset($_SESSION['adminname'])) {
  echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
 }

// Hotel count
$query = $conn->query("SELECT COUNT(*) AS count_hotels FROM hotels");
$allHotels = $query->fetch(PDO::FETCH_OBJ);
echo "Total Hotels: " . $allHotels->count_hotels;


// admin count
$admons = $conn->query("SELECT COUNT(*) AS count_admins FROM hotels");
$sdmins = $query->fetch(PDO::FETCH_OBJ);
echo "Total Hotels: " . $allAdmins->count_hotels;

// rooms count
$rooms = $conn->query("SELECT COUNT(*) AS count_rooms FROM hotels");
$rooms = $query->fetch(PDO::FETCH_OBJ);
echo "Total Hotels: " . $allRooms->count_hotels;

// bookings count
$bookings = $conn->query("SELECT COUNT(*) AS count_bookings FROM hotels");
$bookings = $query->fetch(PDO::FETCH_OBJ);
echo "Total Hotels: " . $allBookings->count_hotels;


?>
            
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hotels</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">number of hotels:<?php echo $allHotel-> count_hotels; ?> 8</p>
             
            </div>
          </div>
        </div>
        <div class="col-md-">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Rooms</h5>
              
              <p class="card-text">number of rooms: <?php echo $allRooms -> count_rooms?> </p>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>
              
              <p class="card-text">number of admins: <?php echo $allAdmins -> count_admins?> </p>
              
            </div>
          </div>
        </div>
      </div>
            <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Booking</h5>
              
              <p class="card-text">number of booking: <?php echo $allBooking -> count_bookings?> </p>
              
            </div>
          </div>
        </div>
<?php require "layouts/footer.php"; ?>

