function customFormatGallery($string,$attr){

        $output = '<div class="content">';
        $output .=    '<div class="grid">';
        $posts = get_posts(array('include' => $attr['ids'],'post_type' => 'attachment'));

        foreach($posts as $imagePost){
             $output .= '<div class="grid__item" data-size="'.wp_get_attachment_image_src($imagePost->ID, "full")[1] .'x'. wp_get_attachment_image_src($imagePost->ID, "full")[2].'">
                    <a href="'.wp_get_attachment_image_src($imagePost->ID, "full")[0].'" class="img-wrap"><img src="'.wp_get_attachment_image_src($imagePost->ID)[0].'" alt="img06" />
                        <div class="description description--grid">
                            <h3>Mother\'s Love</h3>
                            <p>Every time you drink a glass of milk or eat a piece of cheese, you harm a mother. Please go vegan. <em>&mdash; Gary L. Francione</em></p>
                            <div class="details">
                                <ul>
                                    <li><i class="fa fa-camera"></i> <span>Canon PowerShot S95</span></li>
                                    <li><i class="fa fa-focal_length"></i> <span>22.5mm</span></li>
                                    <li><i class="fa fa-aperture"></i> <span>&fnof;/5.6</span></li>
                                    <li><i class="fa fa-exposure_time"></i> <span>1/1000</span></li>
                                    <li><i class="fa fa-iso"></i> <span>80</span></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </div>';
        }

        $output .= "</div>";
        $output .= '<div class="preview">
                <button class="action action--close"><i class="fa fa-times"></i><span class="text-hidden">Close</span></button>
                <div class="description description--preview"></div>
            </div>';
        $output .= "</div>";

        return $output;
    }
