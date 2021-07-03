<?php
/**
 * Okcash Status Page
 *
 * @category File
 * @package  OkcashStatus
 * @license  https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

$config = array(
  // RPC
  'rpc_user'                  => 'rpcuser',
  'rpc_pass'                  => 'rpcpass',
  'rpc_host'                  => 'localhost',
  'rpc_port'                  => 'myport',
  'rpc_ssl'                   => false,
  'rpc_ssl_ca'                => null,

  // Peers
  'display_peer_info'         => false,
  'display_peer_port'         => false,
  'hide_dark_peers'           => true,
  'ignore_unknown_ping'       => false,
  'peers_to_ignore'           => array(),

  // Staking
  'display_stake_info'        => true,
  'display_balance'           => true,

  // Temperature
  'Raspi_temp'                => true,

  // Cache
  'cache_geo_data'            => false,
  'geo_cache_file'            => '/var/tmp/okcashdd-geolocation.cache',
  'geo_cache_time'            => 604800,
  'use_cache'                 => true,
  'cache_file'                => '/tmp/okcashd-status.cache',
  'max_cache_time'            => 300,
  'nocache_whitelist'         => array('127.0.0.1'),

  // Geolocation
  'geolocate_peer_ip'         => false,
  'display_ip_location'       => false,

  // UI
  'display_free_disk_space'   => true,
  'display_version'           => true,
  'display_max_height'        => true,
  'use_bitcoind_ip'           => true,

  // Node Count
  'peercount_whitelist'       => array('127.0.0.1'),
  'peercount_file'            => '/tmp/okcashd-peers.data',
  'peercount_max_age'         => '2592000',
  'peercount_min_data_points' => 10,
  'peercount_extra_nodes'     => array(),

  // Uptime
  'bitcoind_process_name'     => 'okcashd',

  // System
  'date_format'               => 'H:i:s T, j F Y ',
  'disk_space_mount_point'    => 'DRV',
  'timezone'                  => null,
  'stylesheet'                => 'v2-light.css',
  'admin_email'               => 'admin@mymail.com',
);
