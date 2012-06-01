<?php

/**
 * Description of PluginsbEuCookieConsentComponents
 *
 * @author Giles Smith
 */
abstract class PluginsbEuCookieConsentComponents extends sfComponents
{
  public function executeCookieConsent(sfWebRequest $request)
  { 
    // Set the message to be displayed
    $this->message = sfConfig::get('app_sbEuCookieConsent_message', 'This website uses cookies to improve your experience. To find out more or how to disable them <a href="/cookie-policy">click here</a>.'); 
  }
}