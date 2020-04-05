<div class="nav">
    <?php 
    $menu_options = [
        'menu_class' => "",
        'container' => false,
        'theme_location' => 'primary-navigation'
        // 'walker' => new custom_navwalker();
    ];
    wp_nav_menu($menu_options);
    
    ?>
</div>
<div class="menu-btn">
    <div class="menu-btn__burger"></div>
</div>