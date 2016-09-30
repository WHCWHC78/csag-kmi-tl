<footer class="footer-black">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="about.php">
                        เกี่ยวกับเรา
                    </a>
                </li>
                <li>
                    <a href="https://www.facebook.com/csag.kmitl" target="_blank">
                        ติดต่อเรา
                    </a>
                </li>

            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; 2016 by Computer System Administrator Group (CSAG)
        </div>
    </div>
</footer>


</body>
<script>
    function showRegisterForm() {
        $('.loginBox').fadeOut('fast', function () {
            $('.registerBox').fadeIn('fast');
            $('.login-footer').fadeOut('fast', function () {
                $('.register-footer').fadeIn('fast');
            });
            $('.modal-title').html('ลงทะเบียน');
        });
        $('.error').removeClass('alert alert-danger').html('');
    }
    function showLoginForm() {
        $('#loginModal .registerBox').fadeOut('fast', function () {
            $('.loginBox').fadeIn('fast');
            $('.register-footer').fadeOut('fast', function () {
                $('.login-footer').fadeIn('fast');
            });
            $('.modal-title').html('เข้าสู่ระบบ');
        });
        $('.error').removeClass('alert alert-danger').html('');
    }
    function openLoginModal() {
        showLoginForm();
        setTimeout(function () {
            $('#loginModal').modal('show');
        }, 100);
    }
    function openRegisterModal() {
        showRegisterForm();
        setTimeout(function () {
            $('#loginModal').modal('show');
        }, 100);
    }
</script>
<!--   Core JS Files   -->
<script src="https://code.jquery.com/jquery-3.1.0.min.js"
        integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script src="mdk/js/material.min.js"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="mdk/js/material-kit.js" type="text/javascript"></script>

</html>