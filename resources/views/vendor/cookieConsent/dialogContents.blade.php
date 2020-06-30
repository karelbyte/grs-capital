<div class="cc-container cc-ui-bar cc-theme-dark js-cookie-consent cookie-consent">
    <div class="cc-dialog-container visible " role="dialog" aria-label="CookieHub">
        <div class="cc-dialog">
            <div class="cc-message">
                <p>{!! trans('cookieConsent::texts.message') !!}.
                    <!--<a href="{{url('privacy-policy')}}">{{ trans('cookieConsent::texts.more') }}</a> -->
                </p>
            </div>
            <div class="cc-actions">
                <a href="#" role="button" class="js-cookie-consent-agree cookie-consent__agree cc-primary-btn"> {{ trans('cookieConsent::texts.agree') }}</a>
              <!--  <a href="#" role="button" class="cc-settings-btn"><i class="cc-logo"></i>Configuración de cookies</a> -->
            </div>
            <div class="cc-clear"></div>
        </div>
    </div>
</div>
