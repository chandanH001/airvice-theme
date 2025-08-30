<?php 

function airvice_main_menu(){
    wp_nav_menu(array(
        'theme_location' => 'main-menu',
        'container'     => '',
        'menu_class'    => '',
        // 'fallback_cb'   => 'Demo_Walker_Nav_Menu::fallback',
        // 'walker'        => new Demo_Walker_Nav_Menu,
    ));
}

function change_widget_menu_class($args) {
    // Only affect menus loaded in widgets (no theme_location set)
    if ( empty($args['theme_location']) ) {
        $args['menu_class'] = 'widget__links'; // replace "menu"
    }
    return $args;
}
add_filter('wp_nav_menu_args', 'change_widget_menu_class');


// Footer About us Widget
class Footer_About_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'footer_about_widget',
            __('Airvice Footer About Widget', 'textdomain'),
            array('description' => __('Displays an About section with emergency contact.', 'textdomain'))
        );
    }

    // Frontend display
    public function widget($args, $instance) {
        echo $args['before_widget'];

        $title       = !empty($instance['title']) ? $instance['title'] : '';
        $description = !empty($instance['description']) ? $instance['description'] : '';
        $emergency_label = !empty($instance['emergency_label']) ? $instance['emergency_label'] : '';
        $phone       = !empty($instance['phone']) ? $instance['phone'] : '';
        ?>
<?php if($title): ?>
<h4 class="footer__widget--title"><?php echo esc_html($title); ?></h4>
<?php endif; ?>

<?php if($description): ?>
<p><?php echo esc_html($description); ?></p>
<?php endif; ?>

<?php if($phone): ?>
<div class="emg__number">
    <?php if($emergency_label): ?>
    <h5><?php echo esc_html($emergency_label); ?></h5>
    <?php endif; ?>
    <h4><a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a></h4>
</div>
<?php endif; ?>

<?php

        echo $args['after_widget'];
    }

    // Admin form
    public function form($instance) {
        $title       = !empty($instance['title']) ? $instance['title'] : '';
        $description = !empty($instance['description']) ? $instance['description'] : '';
        $emergency_label = !empty($instance['emergency_label']) ? $instance['emergency_label'] : 'Emergency :';
        $phone       = !empty($instance['phone']) ? $instance['phone'] : '';
        ?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('description'); ?>">Description:</label>
    <textarea class="widefat" id="<?php echo $this->get_field_id('description'); ?>"
        name="<?php echo $this->get_field_name('description'); ?>"><?php echo esc_textarea($description); ?></textarea>
</p>
<p>
    <label for="<?php echo $this->get_field_id('emergency_label'); ?>">Emergency Label:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('emergency_label'); ?>"
        name="<?php echo $this->get_field_name('emergency_label'); ?>" type="text"
        value="<?php echo esc_attr($emergency_label); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('phone'); ?>">Phone:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"
        name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo esc_attr($phone); ?>">
</p>
<?php
    }

    // Update data
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title']       = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['description'] = (!empty($new_instance['description'])) ? sanitize_textarea_field($new_instance['description']) : '';
        $instance['emergency_label'] = (!empty($new_instance['emergency_label'])) ? sanitize_text_field($new_instance['emergency_label']) : '';
        $instance['phone']       = (!empty($new_instance['phone'])) ? sanitize_text_field($new_instance['phone']) : '';
        return $instance;
    }
}

// Register widget
function register_footer_about_widget() {
    register_widget('Footer_About_Widget');
}
add_action('widgets_init', 'register_footer_about_widget');

// end Footer About us Widget


// Footer Contact Info Widget

class Airvice_Contact_Widget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'airvice_contact_widget',
            __('Airvice Contact Info', 'airvice'),
            array('description' => __('Displays contact info in the footer.', 'airvice'))
        );
    }

   
    public function widget($args, $instance) {
        echo $args['before_widget'];

        $title = !empty($instance['title']) ? $instance['title'] : 'Contact Info';
        $address = !empty($instance['address']) ? $instance['address'] : '';
        $phone = !empty($instance['phone']) ? $instance['phone'] : '';
        $email = !empty($instance['email']) ? $instance['email'] : '';

        ?>
<h4 class="footer__widget--title"><?php echo esc_html($title); ?></h4>
<ul class="widget__contact">
    <?php if($address): ?>
    <li><?php echo nl2br(esc_html($address)); ?></li>
    <?php endif; ?>
    <?php if($phone): ?>
    <li><span>Support:</span> <a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a></li>
    <?php endif; ?>
    <?php if($email): ?>
    <li><span>Email:</span> <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a></li>
    <?php endif; ?>
</ul>
<?php

        echo $args['after_widget'];
    }

  
    public function form($instance) {
        $title = !empty($instance['title']) ? $instance['title'] : 'Contact Info';
        $address = !empty($instance['address']) ? $instance['address'] : '';
        $phone = !empty($instance['phone']) ? $instance['phone'] : '';
        $email = !empty($instance['email']) ? $instance['email'] : '';
        ?>
<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>"
        name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('address'); ?>">Address:</label>
    <textarea class="widefat" id="<?php echo $this->get_field_id('address'); ?>"
        name="<?php echo $this->get_field_name('address'); ?>"><?php echo esc_textarea($address); ?></textarea>
</p>
<p>
    <label for="<?php echo $this->get_field_id('phone'); ?>">Phone:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('phone'); ?>"
        name="<?php echo $this->get_field_name('phone'); ?>" type="text" value="<?php echo esc_attr($phone); ?>">
</p>
<p>
    <label for="<?php echo $this->get_field_id('email'); ?>">Email:</label>
    <input class="widefat" id="<?php echo $this->get_field_id('email'); ?>"
        name="<?php echo $this->get_field_name('email'); ?>" type="email" value="<?php echo esc_attr($email); ?>">
</p>
<?php
    }

    
    public function update($new_instance, $old_instance) {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? sanitize_text_field($new_instance['title']) : '';
        $instance['address'] = (!empty($new_instance['address'])) ? sanitize_textarea_field($new_instance['address']) : '';
        $instance['phone'] = (!empty($new_instance['phone'])) ? sanitize_text_field($new_instance['phone']) : '';
        $instance['email'] = (!empty($new_instance['email'])) ? sanitize_email($new_instance['email']) : '';
        return $instance;
    }
}

function register_airvice_contact_widget() {
    register_widget('Airvice_Contact_Widget');
}
add_action('widgets_init', 'register_airvice_contact_widget');

 /**
     * Sanitize SVG markup for front-end display.
     *
     * @param  string $svg SVG markup to sanitize.
     * @return string       Sanitized markup.
     */
    function airvice_kses($custom_html_tags = '')
    {
        $allowed_html = [
            'svg'        => [
                'class'           => true,
                'aria-hidden'     => true,
                'aria-labelledby' => true,
                'role'            => true,
                'xmlns'           => true,
                'width'           => true,
                'height'          => true,
                'viewbox'         => true, // <= Must be lower case!
            ],
            'path'       => [
                'd'               => true,
                'fill'            => true,
                'stroke'          => true,
                'stroke-width'    => true,
                'stroke-linecap'  => true,
                'stroke-linejoin' => true,
                'opacity'         => true,
            ],
            'a'          => [
                'class'  => [],
                'href'   => [],
                'title'  => [],
                'target' => [],
                'rel'    => [],
            ],
            'b'          => [],
            'blockquote' => [
                'cite' => [],
            ],
            'cite'       => [
                'title' => [],
            ],
            'code'       => [],
            'del'        => [
                'datetime' => [],
                'title'    => [],
            ],
            'dd'         => [],
            'div'        => [
                'class' => [],
                'title' => [],
                'style' => [],
            ],
            'dl'         => [],
            'dt'         => [],
            'em'         => [],
            'h1'         => [],
            'h2'         => [],
            'h3'         => [],
            'h4'         => [],
            'h5'         => [],
            'h6'         => [],
            'i'          => [
                'class' => [],
            ],
            'img'        => [
                'alt'    => [],
                'class'  => [],
                'height' => [],
                'src'    => [],
                'width'  => [],
            ],
            'li'         => [
                'class' => [],
            ],
            'ol'         => [
                'class' => [],
            ],
            'p'          => [
                'class' => [],
            ],
            'q'          => [
                'cite'  => [],
                'title' => [],
            ],
            'q'          => [
                'cite'  => [],
                'title' => [],
            ],
            'span'       => [
                'class' => [],
                'title' => [],
                'style' => [],
                'id'    => [],
            ],
            'iframe'     => [
                'width'       => [],
                'height'      => [],
                'scrolling'   => [],
                'frameborder' => [],
                'allow'       => [],
                'src'         => [],
            ],
            'strike'     => [],
            'br'         => [],
            'strong'     => [],
        ];

    return wp_kses($custom_html_tags, $allowed_html);
}