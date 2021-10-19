<?php
/**
 * @package    M.S. Testimony Sanacion de Utero
 *
 * @author     Koen Vandezande <koen@rioguides.biz>
 * @copyright  RioGuides.Biz
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       https://rioguides.biz
 */

defined('_JEXEC') or die;

use Joomla\CMS\Language\Text;

// Access to module parameters
$domain = $params->get('domain', 'https://rioguides.biz');
// Load the smart search component language file.
$lang = $app->getLanguage();
$lang->load('mod_mstestimonsana', JPATH_SITE);
?>
<div class="contact_buttons">
  <div class="contact_button-item">
    <span class="contact_button social_icon_es"><i class="fal fa-envelope"></i><?php echo Text::_('MOD_MSTESTIMONSANA_CORREO_ELEC'); ?></span>
  </div>
  <div class="contact_button-item">
    <a class="contact_button-anchor" href="https://api.whatsapp.com/send?phone=5491157548291" target="_blank" rel="noopener noreferrer">
      <span class="contact_button"><i class="fab fa-whatsapp"></i><?php echo Text::_('MOD_MSTESTIMONSANA_WHATSAPP'); ?></span>
    </a>
  </div>
</div>
<div class="test-hor__title">
  <h2><?php echo Text::_('MOD_MSTESTIMONSANA_LAS_MUJERES'); ?></h2>
</div>
<div class="test-hor__container">
  <div class="test-hor__item">
    <img
      class="test-hor__flower_image_corner"
      src="https://marielaspoltore.com/images/logos/flower_corner_90_lower_right.png"
      alt="Corner Flower"
    />
    <img
      class="test-hor__image"
      src="https://marielaspoltore.com/images/articles/testemonial_florencia_massacessi_240.jpg"
      alt="Profile Picture of Florencia Massacessi"
    />
    <div class="test-hor__text-wrapper">
      <p>
      <?php echo Text::_('MOD_MSTESTIMONSANA_LA_SANACION'); ?>
      </p>
      <div class="test-hor__byhand byhand">
        Florencia Massacessi
        <div class="test-hor__icon">
          <div class="fas fa-map-marker-alt">
            <span class="testimonial-place"> California (EEUU)</span>
          </div>
        </div>
      </div>
      <div>
        <img
          class="test-hor__image-2"
          src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png"
          alt="Flower"
        />
      </div>
    </div>
  </div>
  <div class="test-hor__container2">
    <div class="test-hor__item">
      <img
        class="test-hor__flower_image_corner_left"
        src="https://marielaspoltore.com/images/logos/flower_corner_90_lower_left.png"
        alt="Corner Flower"
      />
      <img
        class="test-hor__image2"
        src="https://marielaspoltore.com/images/articles/testemonial_camila_gascón_240.jpg"
        alt="Profile Picture of Camila Gascón Beski"
      />
      <div class="test-hor__text-wrapper2">
        <p>
          <b><?php echo Text::_('MOD_MSTESTIMONSANA_LA_SANACION_2A'); ?></b><?php echo Text::_('MOD_MSTESTIMONSANA_LA_SANACION_2B'); ?> 
        </p>
        <div class="test-hor__byhand byhand">
          Camila Gascón Beski
          <div class="test-hor__icon">
            <div class="fas fa-map-marker-alt">
              <span class="testimonial-place"> Auckland (Nueva Zelanda)</span>
            </div>
          </div>
        </div>
        <div>
          <img
            class="test-hor__image-2l"
            src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png"
            alt="Flower"
          />
        </div>
      </div>
    </div>
  </div>
</div>







<div class="testimonial-title">
    <h2><?php echo Text::_('MOD_MSTESTIMONSANA_LAS_MUJERES'); ?></h2>
</div>
<div class="testimonial-container">
  <div class="testimonial-item">
    <div class="testimonial-image-container">
      <img class="testimonial-image" src="https://marielaspoltore.com/images/articles/testemonial_florencia_massacessi_240.jpg"
        alt="Florencia Massacessi">
    </div>
    <span class="testimonial-icon-top fas fa-quote-right fa-3x"> </span>
    <p><?php echo Text::_('MOD_MSTESTIMONSANA_LA_SANACION'); ?></p>
    <div class="testimonial-byhand byhand">Florencia Massacessi</div>
    <div class="testimonial-icon fas fa-map-marker-alt"><span class="testimonial-place"> California (EEUU)</span></div>
    <div><img class="testimonial_image_2" src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png" alt="Flower"></div>
  </div>
  <div class="testimonial-item">
    <div class="testimonial-image-container">
      <img class="testimonial-image" src="https://marielaspoltore.com/images/articles/testemonial_laura_pomilio_240.jpg"
        alt="Laura Pomilio">
    </div>
    <span class="testimonial-icon-top fas fa-quote-right fa-3x"> </span>
    <p><?php echo Text::_('MOD_MSTESTIMONSANA_LA_TERAPIA'); ?></p>
    <div class="testimonial-byhand byhand">Laura Pomilio</div>
    <div class="testimonial-icon fas fa-map-marker-alt"><span class="testimonial-place"> Puerto Iguazú (Arg)</span></div>
    <div><img class="testimonial_image_2" src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png" alt="Flower"></div>
  </div>
  <div class="testimonial-item">
    <div class="testimonial-image-container">
      <img class="testimonial-image" src="https://marielaspoltore.com/images/articles/testemonial_laura_lattanzi_240.jpg"
        alt="Laura Lattanzi">
    </div>
    <span class="testimonial-icon-top fas fa-quote-right fa-3x"> </span>
    <p></p>
    <div class="testimonial-byhand byhand">Laura Lattanzi</div>
    <div class="testimonial-icon fas fa-map-marker-alt"><span class="testimonial-place"> Santiago (Chile)</span></div>
    <div><img class="testimonial_image_2" src="https://marielaspoltore.com/images/logos/tree_flower_01_60.png" alt="Flower"></div>
  </div>
</div>