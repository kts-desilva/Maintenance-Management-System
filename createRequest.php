<!DOCTYPE html>
<html>
<style>
    /* Full-width input fields */
    input[type=text], input[type=password] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    /* Set a style for all buttons */
    button {
        background-color: rgba(48,62,69,0.91);
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
    }

    /* Extra styles for the cancel button */
    .cancelbtn {
        padding: 14px 20px;
        background-color: #f44336;
    }

    /* Float cancel and signup buttons and add an equal width */
    .cancelbtn,.signupbtn {float:left;width:50%}

    /* Add padding to container elements */
    .container {
        padding: 16px;
    }

    /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 80%; /* Could be more or less, depending on screen size */
    }

    /* The Close Button (x) */
    .close {
        position: absolute;
        right: 35px;
        top: 15px;
        color: #000;
        font-size: 40px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: red;
        cursor: pointer;
    }

    /* Clear floats */
    .clearfix::after {
        content: "";
        clear: both;
        display: table;
    }

    /* Change styles for cancel button and signup button on extra small screens */
    @media screen and (max-width: 300px) {
        .cancelbtn, .signupbtn {
            width: 100%;
        }
    }
</style>
<body>

<h2>Create Request Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Create Request</button>

<div id="id01" class="modal">
    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
    <form class="modal-content animate" action="/action_page.php">
        <div class="container">
            <label><b>Maintenance Name</b></label>
            <input type="text" placeholder="Maintenance Name" name="request_name" required>

            <label><b>Type</b></label>
            <input type="text" placeholder="Enter type" name="type" required>

            <label><b>Department</b></label>
            <input type="text" placeholder="Department" name="request_department" required>

            <label><b>Location</b></label>
            <input type="text" placeholder="Enter Location" name="request_location" required>

            <label><b>Description</b></label>
            <input type="text" placeholder="Maintenance Description here" name="request_description" required>
            <input type="checkbox"> Urgent
            <p>By creating a maintenance request you agree to university <a href="#">Terms & Regulations</a>.</p>

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Create</button>
            </div>
        </div>
    </form>
</div>

<script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

<?php
/**
 * Created by PhpStorm.
 * User: Dulaj
 * Date: 04-Jul-17
 * Time: 10:09 PM
 */


?>

</body>



</html>
