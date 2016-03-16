<?php

/**
 * @file
 * Contains \Drupal\audiofield\Plugin\AudioPlayer\DefaultMp3Player.
 */

namespace Drupal\audiofield\Plugin\AudioPlayer;

use Drupal\audiofield\AudioFieldPluginInterface;
use Drupal\Core\Render\Markup;

/**
 * @AudioPlayer (
 *   id = "default_mp3_player",
 *   title = @Translation("Default mp3 player"),
 *   file_types = {
 *     "mp3",
 *   },
 *   description = "Default html5 player to play mp3 files."
 * )
 */
class DefaultMp3Player implements AudioFieldPluginInterface {

    /**
     * {@inheritdoc}
     */
    public function renderPlayer(array $player_data) {
        $audio_file = $player_data['file'];
        $markup = "<audio controls>
                   <source src='" . $audio_file . "' type='audio/mpeg'>
                   Your browser does not support the audio element.
                   </audio>";
        return Markup::create($markup);
    }
}