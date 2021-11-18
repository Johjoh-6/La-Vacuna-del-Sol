<footer id="footer">
    <div class="wrap6">
        <nav>
            <ul>
                <li><a href="legal-mention.php">Mention légale</a></li>
                <li><a href="contact.php">Nous contacter</a></li>
                <li><a href="tel:+33658564"> Appelez nous </a></li>
            </ul>
        </nav>
        <div class="copy">&copy; Vacuna Del Sol Creator</div>
        <div class="reseau">
            <ul>
                <li><a href="#" target="_blank"><img src="asset/img/facebook-svgrepo-com (1).svg" alt=""></a></li>
                <li><a href="#"target="_blank"><img src="asset/img/instagram-svgrepo-com.svg" alt=""></a></li>
                <li><a href="#" target="_blank"><img src="asset/img/twitter-svgrepo-com.svg" alt=""></a></li>
            </ul>
        </div>
</div>
</footer>

<!--<script src="../asset/js/main.js"></script>-->
<script>
    function myFunction() {
        var x = document.getElementById("navbar");
        if (x.className === "nav") {
            x.className += " responsive";
        } else {
            x.className = "nav";
        }
    }
</script>
<script>
    const wrapper = document.querySelector('.wrapper');
    const indicators = [...document.querySelectorAll('.indicators button')];

    let currentTestimonial = 0; // Default 0

    indicators.forEach((item, i) => {
        item.addEventListener('click', () => {
            indicators[currentTestimonial].classList.remove('active');
            wrapper.style.marginLeft = `-${100 * i}%`;
            item.classList.add('active');
            currentTestimonial = i;
        })
    })</script>

</body>
</html>