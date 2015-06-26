<header class="welcome-home">
  <div class="bg-3d">
      <img alt="background" src="<?php echo base_url(); ?>assets/images/bg-3d.jpg" />
      <img alt="effecto-1" src="<?php echo base_url(); ?>assets/images/effect1.png" />
      <img alt="effecto-2" src="<?php echo base_url(); ?>assets/images/effect2.png" />
      <img alt="effecto-nubes" src="<?php echo base_url(); ?>assets/images/nubes.png" />
  </div>
  
  <div class="container-fluid">
    <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Santa Rosa de la Yunga" class="wow slideInDown" width="200" height="200"></a>
    <h1><strong class="welcome">Enviar una Foto</strong></h1>
  </div>
</header>
<section>
<div class="container-fluid wow slideInUp">

	<div class="col-md-6 col-xs-10 panel-form-upload col-md-offset-3 col-xs-offset-1 hidden-xs">
      <div class="panel panel-default panel-upload">
        <?php echo form_open_multipart($this->base_service .'new_image','id="form-image-upload"'); ?>
        <div class="panel-body">
          <div class="fileinput fileinput-new" data-provides="fileinput">
            <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 280px;" ></div>
            <div class="text-center">
              <span class="btn btn-info btn-sm btn-file"><span class="fileinput-new">Seleccionar Foto</span><span class="fileinput-exists"><i class="fa fa-refresh"></i> Cambiar</span>
              <input type="file" name="userfile" id="userfile" required></span>
              <a href="#" class="btn btn-danger btn-sm fileinput-exists" data-dismiss="fileinput"><i class="fa fa-trash"></i> Eliminar</a>
            </div>
          </div>
        </div>
        <div class="panel-footer">
          <span><i class="fa fa-send"></i> Enviar una foto</span>
          <button class="btn btn-primary btn-sm pull-right" type="submit">Enviar <i class="fa fa-cloud-upload"></i></button>
          <span class="clearfix"></span>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>

    <div class="col-md-6 col-xs-10 panel-form-upload col-md-offset-3 col-xs-offset-1 visible-xs">
      <div class="panel panel-default panel-upload">
        <?php echo form_open_multipart($this->base_service .'new_image','id="form-image-upload"'); ?>
        <div class="panel-body">
          <input type="file" name="userfile" id="userfile" required class="form-control"></span>
        </div>
        <div class="panel-footer">
          <span><i class="fa fa-send"></i> Enviar una foto</span>
          <button class="btn btn-primary btn-sm pull-right" type="submit">Enviar <i class="fa fa-cloud-upload"></i></button>
          <span class="clearfix"></span>
        </div>
        <?php echo form_close() ?>
      </div>
    </div>

</div>
</section>