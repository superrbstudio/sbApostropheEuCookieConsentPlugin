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
    //$this->getResponse()->setCookie(, true, time() + (365 * 24 * 3600), '/');
    setcookie('sb-eu-cookie-nom-nom', 1, time() + (365 * 24 * 3600), '/');
    return sfView::NONE;
  }
}