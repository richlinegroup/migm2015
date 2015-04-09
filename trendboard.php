<?php require_once( 'portal/cms.php' ); ?>

<cms:template title="Trend Board Template" clonable="1">
  <cms:editable name="week_number" type="text" order="1" />
  <cms:editable name="week_title" type="text" order="2" />
  <cms:editable name="trend_image" type="image" order="3" />
  <cms:editable name="mobile_trend_image" type="image" order="4" />
  <cms:editable name="trend_url" type="text" order="5" />
</cms:template>

<!DOCTYPE html>
<html class="no-js" lang="en" >
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>MAY IS GOLD MONTH</title>
  </head>
  <body>
  </body>
</html>

<?php COUCH::invoke(); ?>
