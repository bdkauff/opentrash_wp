  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Le styles -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">


    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <?php wp_enqueue_script("jquery"); ?>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/bootstrap-spans.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('.row-spans').spans();
    });
</script>
    <?php wp_head(); ?>
  </head>
  <body>

  <div class="navbar navbar-fixed-top navbar-right">
    <div class="navbar-inner">
      <div class="container">
        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
        <a class="brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
        <div class="nav-collapse collapse">
          <ul class="nav pull-right">

              <?php wp_list_pages(array('title_li' => '', 'exclude' => '5'  , 'depth'=>1)); ?>

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
  </div>

  <div class="container">