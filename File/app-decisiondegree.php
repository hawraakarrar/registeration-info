<style>

#myImg {
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
}

/* Caption of Modal Image */
#caption {
  margin: auto;
  display: block;
  width: 80%;
  max-width: 700px;
  text-align: center;
  color: #ccc;
  padding: 10px 0;
  height: 150px;
}

/* Add Animation */
.modal-content, #caption {  
  -webkit-animation-name: zoom;
  -webkit-animation-duration: 0.6s;
  animation-name: zoom;
  animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
  from {-webkit-transform:scale(0)} 
  to {-webkit-transform:scale(1)}
}

@keyframes zoom {
  from {transform:scale(0)} 
  to {transform:scale(1)}
}

/* The Close Button */
.close {
  position: absolute;
  top: 15px;
  right: 35px;
  color: #f1f1f1;
  font-size: 40px;
  font-weight: bold;
  transition: 0.3s;
}

.close:hover,
.close:focus {
  color: #bbb;
  text-decoration: none;
  cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
  .modal-content {
    width: 100%;
  }
}
</style>


<?php
session_start();
$activepage = "app-decisiondegree";
include('MainPage.php');
?>
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- users list start -->
            <section class="users-list-wrapper">
                <!-- users filter start -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> الادوار </h4>
                        <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                        <div class="heading-elements">
                            <ul class="list-inline mb-0">
                                <li><a data-action="collapse"><i class="feather icon-chevron-down"></i></a></li>
                                <li><a data-action="" data-toggle="modal" data-target="#addCollegeModal"><i class="feather icon-edit-2 users-data-filter"></i></a></li>
                                <!-- <li><a data-action="close"><i class="feather icon-x"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>الدرجة</th>
                                            <th>نوعها</th>
                                            <th>الكتاب</th>
                                            <th>ملاحظة</th>
                                            <th>السنة</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include("../connect.php");
                                        $round = mysqli_query($link, "SELECT decisiondegree.Degree as degree , decisiondegree.Type as dtype,
                                        decisiondegree.Image as Image ,decisiondegree.Note as note ,
                                        years.Name as Ydegree
                                        FROM decisiondegree
                                        INNER JOIN years ON decisiondegree.Year_Id=years.ID;");


                                        while ($round_data =  mysqli_fetch_array($round)) {
                                        ?>
                                            <tr>
                                                <td><?php echo  $round_data['degree']; ?></td>
                                                <td><?php echo $round_data['dtype']; ?></td>
                                                <td>
                                                <img id="myImg" src=" <?php echo '../media/' . $round_data['Image']; ?>"  style="width:75; height=75;">

                                                    <!-- The Modal -->
                                                    <div id="myModal" class="modal">
                                                    <span class="close">&times;</span>
                                                    <img class="modal-content" id="img01">
                                                    <div id="caption"></div>
                                                    </div>
                                                   


                                                </td>
                                                <td><?php echo $round_data['note']; ?></td>

                                                <td><?php echo  $round_data['Ydegree']; ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>




            </section>

            <div class="modal fade" id="addCollegeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-sm" role="document">
                    <div class="modal-content">
                        <section class="todo-form">
                            <form id="form-add-todo" method="post" enctype="multipart/form-data" action="InsertDecisionDegree.php" class="todo-input">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">اضافة درجة </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <fieldset class="form-group">
                                        <input type="hidden" name="page" class="new-todo-item-title form-control" Value="app-user-college">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="number" name="inputDegree" class="new-todo-item-title form-control" placeholder="الدرجة">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <input type="text" name="inputtype" class="new-todo-item-title form-control" placeholder="نوع الدرجة">
                                    </fieldset>

                                    <fieldset class="form-group">
                                        <input type="text" name="inputnote" class="new-todo-item-title form-control" placeholder="ملاحظة">
                                    </fieldset>
                                    <fieldset class="form-group">
                                        <select name="inputyear" id="inputyear" class="form-control" required>
                                            <option disabled selected value> السنة </option>

                                            <?php
                                            include('../connect.php');

                                            $sql = "SELECT * FROM `years` ";
                                            $result = mysqli_query($link, $sql);
                                            if (mysqli_num_rows($result) > 0) {
                                                // output data of each row
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                    $num = $row["ID"] . "<br>";
                                                    $name = $row["Name"] . "<br>";
                                                    if ($college_data['ID'] == $row["ID"]) {
                                                        echo "<option value='$num' selected>" . $name . "</option>";
                                                    } else {
                                                        echo "<option value='$num'>" . $name . "</option>";
                                                    }
                                                }
                                            } else {
                                                echo "0 results";
                                            }
                                            ?>

                                        </select>
                                    </fieldset>
                                    <div class="media">
                                        <label for="inputCodeNumber">الكتاب </label>
                                        <div class="media-body mt-75">
                                            <div class="col-12 px-0 d-flex flex-sm-row flex-column justify-content-start">
                                                <label class="btn btn-sm btn-primary ml-50 mb-50 mb-sm-0 cursor-pointer" for="account-upload">Upload new photo</label>
                                                <input type="file" name="bookimage" id="account-upload" hidden>
                                            </div>
                                            <p class="text-muted ml-75 mt-50"><small>Allowed JPG, GIF or PNG. Max
                                                    size of
                                                    800kB</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <button name="Save" type="submit" class="btn btn-primary add-todo-item"><i class="feather icon-check d-block d-lg-none"></i>
                                            <span class="d-none d-lg-block">اضافة الدرجة </span></button>
                                    </fieldset>
                                    <fieldset class="form-group position-relative has-icon-left mb-0">
                                        <button type="button" class="btn btn-outline-light" data-dismiss="modal"><i class="feather icon-x d-block d-lg-none"></i>
                                            <span class="d-none d-lg-block">الغاء</span></button>
                                    </fieldset>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>



            <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>