<?php 
/**
*-------------------------------------------------------------------------------
* DT Simple Youtube Embed - Embed Youtube videos in Joomla by Detalhar - http://detalharweb.com.br
*-------------------------------------------------------------------------------
* @package DT Simple Youtube Embed
* @version 0.1.0
* @author Detalhar http://http://detalharweb.com.br
* @copyright (C) 2015 Detalhar. All Rights Reserved
* @license - GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html or see LICENSE.txt
*
* DT Simple Youtube Embed is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
**/

defined('_JEXEC') or die('Access Restricted');
?>
<?php if ($youtube_id){ ?>
 <script>
      
      var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('dt-ytPlayer', {
          height: '<?php echo $height ?>',
          width: '<?php echo $width ?>',
          videoId: '<?php echo $youtube_id ?>',
          playerVars: { 'autoplay': <?php echo $autoplay ?>, 'controls':1, 'rel':0},
          events: {
            'onReady': onPlayerReady,
          }
        });
      }

        function onPlayerReady(event) {
      }
</script>
<div id="dt-ytPlayer"></div>
<?php } else {?>
<p><?php echo JTEXT::_('MOD_DT_YOUTUBE_ERROR')?></p>;
<?php }?>