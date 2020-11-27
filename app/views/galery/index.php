<style type="text/css">
        .row {
      display: flex;
      flex-wrap: wrap;
      padding: 0 4px;
    }

    /* Create four equal columns that sits next to each other */
    .column {
      flex: 25%;
      max-width: 33.3%;
      padding: 0 4px;
    }

    .column img {
      margin-top: 8px;
      vertical-align: middle;
      width: 100%;
      filter: grayscale(1) brightness(0.5);
      border-radius: 5px;
      cursor: pointer;
      transition: 0.3s linear;
    }
    .column img:hover {
      filter: grayscale(0);
    }
    @media screen and (max-width: 800px) {
      .column {
        flex: 50%;
        max-width: 50%;
      }
    }

    /* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {
      .column {
        flex: 100%;
        max-width: 100%;
      }
      .column img {
        filter: grayscale(0) brightness(1);
      }
    }

</style>
</head>
<body>
<!-- header -->   
    <div class="container-fluid box-shadow-2 back">
        <div class="row">
            <div class="col-1 bdr-right d-flex justify-content-center">
                <a href="<?php echo BASEURL ?>"><h3><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/><path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/></svg></h3></a>
            </div>
            <div class="col">
                <p class="my-2 text-shadow"><small>PENDAFTARAN</small></p>
            </div>
        </div>
    </div>
<!-- akhhir header -->   


<div class="container-fluid">
    <div class="row">
        <div class="column">
            <img src="<?php echo BASEURL ?>/img/galery/p-1.jpg">
            <img src="<?php echo BASEURL ?>/img/galery/p-2.jpg">
            <img src="<?php echo BASEURL ?>/img/galery/p-3.jpg">
        </div>
        <div class="column">
            <img src="<?php echo BASEURL ?>/img/galery/p-4.jpg">
            <img src="<?php echo BASEURL ?>/img/galery/p-5.jpg">
            <img src="<?php echo BASEURL ?>/img/galery/p-6.jpg">
            <img src="<?php echo BASEURL ?>/img/galery/p-7.jpg">
        </div>
        <div class="column">
            <img src="<?php echo BASEURL ?>/img/galery/p-8.jpg">
            <img src="<?php echo BASEURL ?>/img/galery/p-10.jpg">
            <img src="<?php echo BASEURL ?>/img/galery/p-9.jpg">
        </div>
    </div>
 </div>