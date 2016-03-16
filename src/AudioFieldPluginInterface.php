<?php

/**
 * @file
 * Contains \Drupal\audiofield\AudioFieldPluginInterface.
 */

namespace Drupal\audiofield;

interface AudioFieldPluginInterface {

    /**
     * Renders the player. 
     */
    public function renderPlayer(array $player_data);
}