<header class="welcome-home">

  <div class="bg-3d">
      <img alt="background" src="<?php echo base_url(); ?>assets/images/bg-3d.jpg" />
      <img alt="effecto-1" src="<?php echo base_url(); ?>assets/images/effect1.png" />
      <img alt="effecto-2" src="<?php echo base_url(); ?>assets/images/effect2.png" />
      <img alt="effecto-nubes" src="<?php echo base_url(); ?>assets/images/nubes.png" />
  </div>

  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Santa Rosa de la Yunga" class="wow slideInDown" width="200" height="200"></a>
    <h1><strong class="welcome"><?php echo $titlepag ?></strong></h1>
  </div>
</header>

<section class="section-photo-content">
<div class="container">
  <?php if(count($results ) == 0){ echo '<h3 class="text-center">Aun no hay resultados para esta Búsqueda</h3> <hr>';} ?>
  
  <div class="row isotope-content">
  
    <?php foreach ($results as $data) { ?>
    <div class="col-md-4 col-xs-6 item ">
      <div class="photo-content wow slideInUp">
        <div class="photo-header hidden-xxs">
          <h4> <i class="fa fa-user"></i> Keny Romero</h4>
        </div>

        <div class="photo-figure">
          <a href="<?php echo $url_service.$data->imageName; ?>" title="Posted By: Keny Romero" data-gallery>
            <img src="<?php echo $url_service_small.$data->imageName; ?>" alt="<?php echo $data->imageTitulo; ?>" class="img-responsive" width="700" height="auto" >
            <div class="photo-expand"></div>
          </a>
        </div>
        
        <a href="<?php echo base_url() ?>photo/<?php echo  $data->tokenId?>" class="btn-nex-tab"><i class="fa fa-external-link"></i></a>

        <div class="photo-footer">
          <div class="photo-date hidden-xxs">
            <time><i class="fa fa-calendar"></i> <?php echo date_convert($data->imageDate); ?></time>
          </div>

          <div class="social-container">

            <div class="btn-group btn-social">
              <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo base_url().'photo/'.$data->tokenId; ?>" class="btn btn-default facebook" target="social"><i class="fa fa-facebook"></i></a>
              <a href="https://twitter.com/share?url=<?php echo base_url().'photo/'.$data->tokenId; ?>" class="btn btn-default twitter" target="social"><i class="fa fa-twitter"></i></a>
              <a href="https://plus.google.com/share?url=<?php echo base_url().'photo/'.$data->tokenId; ?>" class="btn btn-default google-plus" target="social"><i class="fa fa-google-plus"></i></a>
              <a class="btn btn-default btn-social-close"><i class="fa fa-times-circle"></i></a>
            </div>

            <div class="social-actions">
              <span class="likes"><?php echo $data->imageLikes; ?></span>
              <a data-action="<?php echo $this->base_service_likes.$data->tokenId ?>" data-toggle="tooltip" title="Me gusta" class="action-like" data-placement="top"><i class="fa fa-thumbs-up"></i></a>
              <a data-toggle="tooltip" title="Compartir" data-placement="left" class="open-share"><i class="fa fa-share-alt"></i> </a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <?php } ?>

  </div>

</div>
</section>
