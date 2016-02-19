<?php

/**
 * Description of PluginsbEuCookieConsentActions
 *
 * @author Giles Smith
 */
abstract class PluginsbEuCookieConsentActions extends sfActions 
{
  public function executeConfirmCookie(sfWebRequest $request)
  {
    $this->getResponse()->setCookie('sb-eu-cookie-nom-nom', true, time() + (365 * 24 *3600), '/');
    return sfView::NONE;
  }
}