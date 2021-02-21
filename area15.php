<?php
    include_once("include/header.php");
?>
<div class="row form_background1">
        <div class="col-12 col-sm-6"></div>
        <div class=" text-right col-12 col-sm-6" style="padding:60px;">
            <div class="container titleh444">
                <h4>قم بارسال شكوى او اقتراح, يهمنا بذلك</h4>
                <form class="my-5" method="" action="">
                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example3" class="form-control" placeholder="الاسم" dir="rtl" />
                    </div>

                    <!-- Text input -->
                    <div class="form-outline mb-4">
                        <input type="text" id="form6Example4" class="form-control" placeholder="رقم الموبايل" dir="rtl" maxlength="10" />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form6Example5" class="form-control" placeholder="الايميل" dir="rtl" />
                    </div>

                    <!-- Number input -->
                    <div class="form-outline mb-4">
                        <select class="form-control" dir="rtl">
                    <option>اسم المبادرة</option>
                  </select>
                    </div>


                    <!-- Message input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form6Example7">الرسالة</label>

                        <textarea dir="rtl" class="form-control" id="form6Example7" rows="4"></textarea>
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
    <div class="">
        <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d216423.42002698116!2d35.993595028583584!3d32.05258553077189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b658f76dbb883%3A0x6dbb13eec3c7a1f1!2sZarqa!5e0!3m2!1sen!2sjo!4v1613763152244!5m2!1sen!2sjo"
            width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>


    <?php
        include_once("include/footer.php");
    ?>



