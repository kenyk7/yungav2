<header class="welcome-home" style="height: 500px">
  <div class="bg-3d">
      <img alt="background" src="<?php echo $url_service.$data_photo->imageName; ?>" />
      <img alt="effecto-1" src="<?php echo base_url(); ?>assets/images/effect1.png" />
      <img alt="effecto-2" src="<?php echo base_url(); ?>assets/images/effect2.png" />
      <img alt="effecto-nubes" src="<?php echo base_url(); ?>assets/images/nubes.png" />
  </div>
  <div class="container-fluid" style="margin-top: 50px">
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Santa Rosa de la Yunga" class="wow slideInDown" width="200" height="200"></a>
  </div><br>
</header>

<section>
<div class="container-fluid">
	<div class="content-photo-view item">
      <div class="panel panel-default wow slideInUp">
        <div class="panel-body">
            <figure class="figure-center">
              <img src="<?php echo $url_service.$data_photo->imageName; ?>" alt="Yunga Fotos" class="img-responsive" width="auto" height="auto">
            </figure>
        </div>
        <div class="panel-footer posr">
            <div class="pull-left heading-photo-data">
            <span class="hidden-xxs"><i class="fa fa-calendar"></i> <?php echo date_convert($data_photo->imageDate); ?></span>
            <span class="left-10"><i class="fa fa-user"></i> <a href="#">Keny Romero</a></span>
          </div>
          <div class="pull-right social-container">
            <div class="btn-group btn-group- btn-social">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo current_url(); ?>" class="btn btn-default facebook" target="social"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/share?url=<?php echo current_url(); ?>" class="btn btn-default twitter" target="social"><i class="fa fa-twitter"></i></a>
              <a href="https://plus.google.com/share?url=<?php echo current_url(); ?>" class="btn btn-default google-plus" target="social"><i class="fa fa-google-plus"></i></a>
              <a class="btn btn-default btn-social-close"><i class="fa fa-times-circle"></i></a>
            </div>

            <div class="social-actions">
              <span class="likes"><?php echo $data_photo->imageLikes; ?></span>
              <a data-action="<?php echo $this->base_service_likes.$data_photo->tokenId ?>" data-toggle="tooltip" title="Me gusta" data-placement="left" class="action-like"><i class="fa fa-thumbs-up"></i></a>
              <a data-toggle="tooltip" title="Compartir" data-placement="left" class="open-share"><i class="fa fa-share-alt"></i> </a>
            </div>

          </div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
</div>
</section>