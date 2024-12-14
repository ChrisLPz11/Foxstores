<footer class="site-footer clearfix" itemscope itemtype="https://schema.org/WPFooter">
    <div class="subfooter">
        <div class="container theme-container">
            <div class="row">
                <div class="col-md-6 col-sm-5">
                    <p style="color:white">Copyright &copy; <a href="index.php" class="thm-clr"> <?php
                            $res1=mysqli_query($link,"select * from about_contact_title");
                            while($row1=mysqli_fetch_array($res1))
                            {
                                echo $row1["project_title"];
                            }
                            ?></title></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="to-top" id="to-top"> <i class="fa fa-long-arrow-up"></i> </div>

<!-- JS Global -->
<script src="assets/plugins/jquery/jquery-2.1.3.js"></script>
<script src="assets/plugins/royalslider/jquery.royalslider.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-select-1.9.3/dist/js/bootstrap-select.min.js"></script>
<script src="assets/plugins/owl-carousel2/owl.carousel.min.js"></script>
<script src="assets/plugins/malihu-custom-scrollbar-plugin-master/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="assets/plugins/isotope-master/dist/isotope.pkgd.min.js"></script>
<script src="assets/plugins/subscribe-better-master/jquery.subscribe-better.min.js"></script>

<!-- Page JS -->
<script src="assets/js/countdown.js"></script>
<script src="assets/js/jquery.sticky.js"></script>
<script src="assets/js/custom.js"></script>
<script src="assets/plugins/Swiper-3.2.7/dist/js/swiper.jquery.min.js"></script>

</body>


</html>