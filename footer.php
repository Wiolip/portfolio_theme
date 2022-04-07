<footer class="footer">
        <div class="container container__footer">

            <?php
                $socials = get_field('socials');
            ?>

            <?php if($socials): ?>

            <div class="footer__socials">
                <a href="<?php echo $socials['github']; ?>" target="_blank" class="social__item"><i
                        class="fab fa-github"></i></a>
                <a href="<?php echo $socials['insta']; ?>" target="_blank" class="social__item"><i
                        class="fab fa-instagram"></i></a>
                <a href="<?php echo $socials['wp_page']; ?>" target="_blank" class="social__item"><i
                        class="fab fa-wordpress"></i></a>
                <a href="<?php echo $socials['linkedin']; ?>" target="_blank" class="social__item"><i
                        class="fab fa-linkedin"></i></a>
            </div>
            <?php endif; ?>

            <p class="footer__content"> designed with <i class="fas fa-heart"></i> by <a href="https://wiolipcreates.pl"
                    class="footer__link">WiolipCreates</a><br />

            </p>
        </div>
        </div>

    </footer>




<script src="assets/js/script.js" type="text/javascript"></script>

<?php wp_footer(); ?>

</body>

</html>


