<?php $this->load->view('partials/header'); ?>

   <!-- Page Header -->
   <header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/post-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="post-heading">
              <h1>Edit Artikel</h1>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

    <div class="alert alert-warning">
        <?php echo validation_errors(); ?>
    </div>

    <h1>EDIT ARTIKEL</h1>
    <?php echo form_open_multipart(); ?> <!--<form method="POST"> -->
        <div class="form-group">
        <label>Judul</label>
        <?php echo form_input('title',set_value('title',$blog['title']),'class="form-control"'); ?> <!--<input class="form-control" type="text" name="title" value="<?php echo $blog['title']; ?>"> -->
        </div>

        <div class="form-group">
        <label>Url</label>
        <?php echo form_input('url',set_value('url',$blog['url']),'class="form-control"'); ?> <!-- <input class="form-control" type="text" name="url" value="<?php echo $blog['url']; ?>" > -->
        </div>

        <div class="form-group">
        <label>Konten</label>
        <?php echo form_textarea('content',set_value('url',$blog['content']),'class="form-control"'); ?>
        
        <!--
        <textarea class="form-control" name="content" id="" cols="30" rows="10">
            ?php echo $blog['content']; ?
        </textarea>
        -->
        </div>

        <div class="form-group">
        <label>Cover</label>
        <?php echo form_upload('cover',$blog['cover'],'class="form-control"'); ?>
        </div>

        <button class="btn btn-primary" type="submit">Edit Artikel</button>

    </form>
            </div>
        </div>
    </div>

    

<?php $this->load->view('partials/footer'); ?>
