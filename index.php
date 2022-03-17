<?php
require_once "templates/header.php";

?>
<div class="container_index d-flex">
    <section class="section1">section1</section>
    <section class="section2">
        <div class="profile_header">
           <div class="cover_profile">
               <img class="cover_pro_size" src="images/bg_img1.jpg" alt="">
               <div class="change_cover"> <input type="file" class="image" name="image_cover"> </input> </div>
           </div>
           <div class="profile_info">
               <div class="profile_logo">
                    <img class="profile_logo_size" src="images/lotus_img1.jpg" alt="">
                    <div class="change_profile"><input type="file" class="ms-3" name="image_profile">
                    </div>
               </div>
               <div class="more_info">
                   <ul>
                       <li><a href="">About</a></li>
                       <li><a href="">Friend</a></li>
                       <li><a href="">Photo</a></li>
                   </ul>
               </div>
           </div>
        </div>
        <?php 
            require_once "views/create_view.php";
        ?>
    </section>
</div>

<?php require_once "templates/footer.php";?>