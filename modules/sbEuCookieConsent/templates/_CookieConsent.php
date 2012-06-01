<?php $message = $sf_data->getRaw('message'); ?>
<?php if($showMessage): ?>
<aside id="sbEuCookieConsentBox">
  <p id="sbEuCookieConsentBoxMessage">
    <?php echo $message; ?>
  </p>
  <a href="<?php echo url_for('@sb_eu_cookie_consent'); ?>" id="sbEuCookieConsentBoxClear" title="I Agree"><span>I Agree</span></a>
</aside>
<?php a_js_call('sbEuCookieConsentSetup()'); ?>
<?php endif; ?>
