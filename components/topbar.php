<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <ul>
                <li><i class="icofont-clock-time icofont-flip-horizontal"></i>
                    <span id='waktu'></span>
                </li>
                <script>
                    document.getElementById('waktu').innerHTML = moment().format('Do MMMM YYYY, h:mm:ss a');
                    setInterval(function() {
                        document.getElementById('waktu').innerHTML = moment().format('Do MMMM YYYY, h:mm:ss a');
                    }, 1000);
                </script>
            </ul>
        </div>
        <div class="social-links mt-2">
            <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
            <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
            <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
            <a href="#" class="skype"><i class="icofont-skype"></i></a>
            <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
        </div>
    </div>
</section>