<?php
    include_once("include/header.php");
?>
<div class="row form_background_new">
        <div class="col-12 col-sm-6"></div>
        <div class=" text-left col-12 col-sm-6" style="padding:60px;padding-bottom: 100px;">
            <div class="container titleh444">
                <h4> قم بارسال رأيك , رأيك يهمنا</h4>
                <form class="my-5" method="" action="">
                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example3" class="form-control" placeholder="الاسم" dir="ltr" />
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example4" class="form-control" placeholder="رقم الموبايل" dir="ltr" maxlength="10" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form6Example5" class="form-control" placeholder="الايميل" dir="ltr" />
                    </div>


                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example7">الرسالة</label>

                        <textarea dir="ltr" class="form-control" id="form6Example7" rows="4"></textarea>
                    </div>


                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-block mb-4 buttonsent">    
                        <img src="img/paper-plane.png" alt="">
                        ارسال
                    </button>
                </form>
            </div>
        </div>
    </div>

<?php
    include_once("include/footer.php");
?>