<?php
/**
 * Template file for the Ready page.
 *
 * Available variables:
 * - $url: The URL of the new preview site.
 * - $age: How long the preview site will be available for.
 */
?>

<div class="borg-demo-done-page">
  <div class="borg-demo-done-center">
    <p class="borg-demo-thank-you">
      Thank you for creating a new demo sandbox. You can access your new Backdrop website at:
    </p>

    <p class="borg-demo-url"><?php print l($url, $url); ?></p>

    <p class="borg-demo-button">
      <?php print l(t('Visit your site'), $url, array('attributes' => array('class' => array('button button-large')))); ?>
    </p>

    <p class="borg-demo-persist-notice">
      This demo sandbox will persist for <strong><?php print $age; ?></strong>.
    </p>
  </div>

  <div class="borg-demo-done-left">
    <p>
      This demo sandbox will act as a new Backdrop installation would. You will
      need to run the installer and set an administrator account as part of the
      setup. Note that sending email from demo sandboxis not allowed, so
      <strong>password recovery will not work</strong>. Be sure to remember your
      password.
    </p>
    <p>
      Demo sandboxes will show you the Standard install. Additional add-ons can
      be installed using the Installer module (Administration > Functionality >
      Install new modules).
    </p>
    <p>
      There is no database export functionality in the demo sandbox. <strong>Any
      work you do will be temporary</strong> and will be deleted after
      <?php print $age; ?>.
    </p>

    <figure class="borg-demo-tugboat-information">
      <a href="https://tugboat.qa" target="_blank">
        <?php print theme('image', array(
          'path' => backdrop_get_path('module', 'borg_tugboat') . '/images/tugboat-logo.png',
          'alt' => 'Tugboat QA Logo',
          'width' => 800,
          'height' => 300,
          'attributes' => array('class' => array('tugboat-logo')),
        )); ?>
      </a>
      <figcaption>
        Backdrop CMS demo sandboxes are provided by
        <a href="http://tugboat.qa">Tugboat.qa</a>, a service that can create
        on-demand site previews for pull requests. To learn more about Tugboat,
        visit <a href="https://tugboat.qa">https://tugboat.qa</a>.
      </figcaption>
    </figure>

    <p>
      Interested in how these sandboxes are built or have ideas for making them
      better? You can <a href="https://github.com/backdrop-contrib/tugboat">view
      the source code for this functionality</a> in the GitHub repository. File
      an issue or pull request in the
      <a href="https://github.com/backdrop-contrib/tugboat/issues">issue
      tracker</a>.
    </p>
  </div>
</div>
