
<!-- Footer -->

<footer class="text-center text-white footerss" style="background-color: rgb(17, 44, 64);">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button">
          <i class="fab fa-facebook-f"></i>
          <!-- <i class="fa fa-facebook-square" aria-hidden="true"></i> -->
        </a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-youtube"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

     
    </section>
    <!-- Section: Social media -->

 
    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
      <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">عدد الزائرين</h5>

          <ul class="list-unstyled mb-0">
            <li>
                 <img src="img/eye (1).png" style="width:20px" alt="">
                 12
            </li>
          </ul>
        </div>



        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">اتصل بنا</h5>

          <ul class="list-unstyled mb-0 my-1">
            <li>
              <a href="opinion_us.php" class="text-white my-1">رايك بهمنا</a>
            </li>
            <li>
              <a href="call_us.php" class="text-white my-1">شكاوي و اقتراحات</a>
            </li>
            <li>
              <a href="join_us.php" class="text-white my-1">انضم الينا</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <!-- <h5 class="text-uppercase">Links</h5> -->

          <ul class="list-unstyled mb-0">
            <li>
              <a href="index.php" class="text-white">الرئيسية</a>
            </li>
            <li>
              <a href="#!" class="text-white">نبذة عن البلدية</a>
            </li>
            <li>
              <a href="#!" class="text-white">المنتجات والخدمات</a>
            </li>
            <li>
              <a href="news.php" class="text-white">الاحبار</a>
            </li>
            <li>
              <a href="#!" class="text-white">المركز الاعلامي</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
        <img src="img/logo_footer.png" class="w-75" alt="">
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
     جميع الحقوق محفوظة © 2020 
    <a class="text-white" href="http://www.jordancode.com/Default.aspx?Lng=2&P=h">شركة جوردن كود</a>
  </div>
 
    
             
        
         
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <!-- <div class="container-fluid py-5 footerss">
        <div class="container">
            <div class="row">
                <div class="col-2 col-sm-4 my-3  text-left">
                    <img class="m-2" src="img/Repeat Grid 12.png" alt="">
                    <img class="m-2" src="img/Repeat Grid 13.png" alt="">
                    <img class="m-2" src="img/Repeat Grid 14.png" alt="">
                    <img class="m-2" src="img/XMLID_822_.png" alt="">
                </div>
                <div class="col-10 col-sm-8 text-right">
                    <a class="mr-1 f" href="">نبذة عن بلدية ال</a>
                    <a class="mr-3 f" href="">المنتجات والخدما</a>
                    <a class="mr-3 f" href="">الاخبار</a>
                    <a class="mr-3 f" href="">المركز الاعلامي</a>
                    <a class="mr-3 f" href="">اتصل بن</a>
                    <img src="img/logo_footer.png" alt="">
                </div>
            </div>
            <hr class="hrfooter">
            <div class="row">
                <div class="col-4 py-2 text-left" style="color:white">
                    <p>جميع الحقوق محفوظة & 2020 شركة جوردن كود</p>
                </div>
                <div class="col-8 text-right">
                    <table class="float-right">
                        <tr>
                            <td>
                                <img src="img/eye (1).png" alt="">
                            </td>
                            <td style="font-size: 30px;color: white; font-weight: 300px;
                            font-family: ErasITC-Demi, Eras ITC;">
                                12
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div> -->





    <script>
        $(document).ready(function() {
            $('#checkbox').click(function() {
                var element = document.body;
                element.classList.toggle("dark");
            });
        });
    </script>

    <script>
        $("#box").mouseenter(function() {
                $("#testhide").show();
            },
            function() {
                $("#testhide").hide();
            });

        $("#box").mouseout(function() {
                $("#testhide").hide();
            },
            function() {
                $("#testhide").show();
            });
    </script>

        
    <script>
            var size = 30; // or any default number yo want
            $(document).ready(function() {
                $("#bigger").click(function() {

                    $("p").css("font-size", size + 1 + "px");
                    if(size <= 32){
                        size++;
                    }
                });
                $("#smaller").click(function() {
                    $("p").css("font-size", size - 1 + "px");
                    if(size >= 20){
                        size--;
                    }
                });
                $("#moreBigger").click(function() {
                    $("p").css("font-size", size + 2 + "px");
                    if(size <= 31){
                        size += 2;
                    }
                });
            });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>