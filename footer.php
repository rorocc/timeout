    <footer>
        <p>Footer</p>
        <?php
            wp_nav_menu(
                array(
                    'menu' => 'footer',
                    'container' => '',
                    'theme_location' => 'footer',
                    'items_wrap' => '<ul>%3$s</ul>'
                )
            );
        ?>
    </footer>
    
    <?php
        wp_footer();
    ?>

</body>
</html>