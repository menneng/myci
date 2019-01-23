<?php $this->load->view('partials/header'); ?>

    <!-- Page Header -->
    <header class="masthead" style="background-image: url('<?php echo base_url(); ?>assets/img/home-bg.jpg')">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
              <h1>Selamat Datang</h1>
              <span class="subheading">pelajar codeigniter</span>
            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

        <form>
            <input type="text" name="find">
            <button type="submit">Cari</button>
        </form>
    
        <?php foreach ($blogs as $key => $blog): ?>    
          <div class="post-preview">
            <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
              <h2 class="post-title">
                <?php echo $blog['title']; ?>
              </h2>
            </a>
            <p class="post-meta">Posted by on <?php echo $blog['date']; ?>
                <a href="<?php echo site_url('blog/edit/'.$blog['id']); ?>">Edit</a>
                <a href="<?php echo site_url('blog/delete/'.$blog['id']); ?>">Delete</a>
            </p>

            <?php echo $blog['content'] ?> 
          </div>
          <hr>
        <?php endforeach; ?>

        </div>
    </div>
</div>

<?php $this->load->view('partials/footer'); ?>










<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />

    <title>Document</title>
    
</head>
<body>
    <h1>Artikel Terbaru </h1>
    
    <a href="<?php echo site_url('blog/add'); ?>">Tambah Artikel</a>

    <form>
        <input type="text" name="find">
        <button type="submit">Cari</button>
    </form>

    <?php foreach ($blogs as $key => $blog): ?>
        <div class="blog">
            <h2>
                <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
                    <?php echo $blog['title']; ?>
                </a>
            </h2>
            <br>

            <a href="<?php echo site_url('blog/edit/'.$blog['id']); ?>">Edit</a>
            <a href="<?php echo site_url('blog/delete/'.$blog['id']); ?>">Delete</a>
            <br>

            <?php echo $blog['content']; ?>
        </div>
    <?php endforeach; ?>

</body>
</html>