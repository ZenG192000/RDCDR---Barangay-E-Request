<?php
defined('BASEPATH') OR exit('No direct script access allowed');

function getAccessToken() {
    $client = new Google_Client();
    $client->setAuthConfig(config_item('oauth2_credentialsFile'));
    $client->addScope(Google_Service_Gmail::GMAIL_SEND);
    $client->setAccessType('offline');
    $client->setApprovalPrompt('force');

    $client->setAccessToken(config_item('oauth2_access_token'));

    if ($client->isAccessTokenExpired()) {
        $client->fetchAccessTokenWithRefreshToken(config_item('oauth2_refreshToken'));
        $accessToken = $client->getAccessToken();
        $accessToken['refresh_token'] = config_item('oauth2_refreshToken');
        setAccessToken($accessToken);
    }

    return $client;
}

function setAccessToken($accessToken) {
    $accessTokenFile = config_item('oauth2_credentialsFile');
    $data = json_decode(file_get_contents($accessTokenFile), true);
    $data['access_token'] = $accessToken['access_token'];
    file_put_contents($accessTokenFile, json_encode($data));
}
