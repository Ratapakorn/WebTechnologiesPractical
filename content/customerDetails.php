<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="keywords" 
        content="Abhi, Abhi GMbH"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <!-- <link rel="stylesheet" href="styles/navbaravbaravbar.css"> -->
    <link rel="stylesheet" href="../styles/customer.css">
    <link rel="stylesheet" href="../styles/themeButton.css">
    <script
        src="../JS_files/darkmode.js" defer>
    </script>
    <script
        src="./JS_files/navbar.js" defer>
    </script>
</head>
<body>
    <div class="container">
        <!-- Sidebar Section -->
        <div class="sidebar">
            <!-- Profile Section -->
            <div class="profile">
                <!-- <img src="https://via.placeholder.com/50" alt="Profile Image"> -->
                <h3>Ratapakorn Linsa-nguan</h3>
            </div>

            <!-- My Orders Section -->
            <div class="section">
                <h4>My Orders</h4>
                <a href="#">Orders</a>
            </div>

            <!-- Account Settings Section -->
            <div class="section">
                <h4>Account Settings</h4>
                <a href="#">Profile Information</a>
                <a href="#">Manage Addresses</a>
                <a href="#">Card Information</a>
            </div>

            <!-- Payments Section -->
            <div class="section">
                <h4>Payments</h4>
                <a href="#">Gift Cards <span class="balance">0</span></a>
                <a href="#">Saved Cards</a>
            </div>

            <!-- My Stuff Section -->
            <div class="section">
                <h4>My Stuff</h4>
                <a href="#">My Coupons</a>
                <a href="#">My Reviews & Ratings</a>
            </div>
            <a href="about.php" class="leftButtons"><i class="fa fa-power-off"  aria-hidden="true"></i>Home Page</a><br><br>
            <a href="about.php" class="leftButtons"><i></i>Logout</a>
        </div>
<!-- sample values are being used atm eaiting foir js  -->
        <!-- Right Content Section -->
        <div class="content">
            <h4>Personal Information <a href="#">Save</a></h4>

            <div class="input-group">
                <input type="text" placeholder="Ratapakorn">
                <input type="text" placeholder="Linsa-nguan">
            </div>

            <label>Your Gender</label>
            <div class="input-group">
                <label><input type="radio" name="gender" value="male"> Male</label>
                <label><input type="radio" name="gender" value="female"> Female</label>
            </div>

            <label>Email Address</label>
            <input type="text" value="riw@gmail.com" readonly>

            <label>Mobile Number</label>
            <input type="text" value="+15246003088" readonly>

            <!-- FAQ Section -->
            <div class="faq">
                <h5>What happens when I update my email address (or mobile number)?</h5>
                <p>Your login email id (or mobile number) changes. You'll receive all your account-related communication on your updated email address (or mobile number).</p>

                <h5>When will my account be updated with the new email address (or mobile number)?</h5>
                <p>It happens immediately after the update. You just need to log in with the new details.</p>

                <br>
                <!-- need to implement this  -->
                <a href="about.php" class="deleteAc"><i></i>Delete Account</a>
            </div>
        </div>

    </div>
</body>
</html>
