<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

      <title><?php echo e(config('app.name', 'Entely Global')); ?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <link rel="icon" href="images/fevicon.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.min.css')); ?>" />
      <!-- site css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/style_dashboard.css')); ?>" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer">
	  
      <!-- responsive css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/responsive.css')); ?>" />
      <!-- color css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/colors.css')); ?>" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap-select.css')); ?>" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/perfect-scrollbar.css')); ?>" />
      <!-- custom css -->
      <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>" />
      <!-- calendar file css -->
      <link rel="stylesheet" href="js/semantic.min.css" />

      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
   <style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
    <style type="text/css">/* Chart.js */
    @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
           
            <?php echo $__env->make('layouts.navigation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('layouts._partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!--    
            <?php if(isset($header)): ?>
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        <?php echo e($header); ?>

                    </div>
                </header>
            <?php endif; ?> -->
           <!-- Content Section -->
            <div class="midde_cont">

            <?php echo $__env->yieldContent('content'); ?>


        <?php echo $__env->make('layouts._partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- jQuery -->
       <!-- jQuery -->
     <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/popper.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
      <!-- wow animation -->
      <script src="<?php echo e(asset('js/animate.js')); ?>"></script>
      <!-- select country -->
      <script src="<?php echo e(asset('js/bootstrap-select.js')); ?>"></script>
      <!-- nice scrollbar -->
      <script src="<?php echo e(asset('js/perfect-scrollbar.min.js')); ?>"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="<?php echo e(asset('js/custom.js')); ?>"></script>
 

      <!-- owl carousel -->
      <script src="<?php echo e(asset('js/owl.carousel.js')); ?>"></script> 
      <!-- chart js -->
      <script src="<?php echo e(asset('js/Chart.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/Chart.bundle.min.js')); ?>"></script>
      <script src="<?php echo e(asset('js/utils.js')); ?>"></script>
      <script src="<?php echo e(asset('js/analyser.js')); ?>"></script>
      <!-- nice scrollbar -->
   
     
      <!-- custom js -->
    
      <script src="<?php echo e(asset('js/chart_custom_style1.js')); ?>"></script>
	  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
	  
	  <script>
	    //selecting all required elements
const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file; //this is a global variable and we'll use it inside multiple functions




button.onclick = ()=>{
  input.click(); //if user click on the button then the input also clicked
}




input.addEventListener("change", function(){
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = this.files[0];
  dropArea.classList.add("active");
  showFile(); //calling function
});
//If user Drag File Over DropArea
dropArea.addEventListener("dragover", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  dropArea.classList.add("active");
  dragText.textContent = "Release to Upload File";
});




//If user leave dragged File from DropArea
dropArea.addEventListener("dragleave", ()=>{
  dropArea.classList.remove("active");
  dragText.textContent = "Drag & Drop to Upload File";
});




//If user drop File on DropArea
dropArea.addEventListener("drop", (event)=>{
  event.preventDefault(); //preventing from default behaviour
  //getting user select file and [0] this means if user select multiple files then we'll select only the first one
  file = event.dataTransfer.files[0];
  showFile(); //calling function
});




function showFile(){
  let fileType = file.type; //getting selected file type
  let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
  if(validExtensions.includes(fileType)){ //if user selected file is an image file
    let fileReader = new FileReader(); //creating new FileReader object
    fileReader.onload = ()=>{
      let fileURL = fileReader.result; //passing user file source in fileURL variable
      let imgTag = `<img src="${fileURL}" alt="image">`; //creating an img tag and passing user selected file source inside src 
attribute
      dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
    }
    fileReader.readAsDataURL(file);
  }else{
    alert("This is not an Image File!");
    dropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
  }
}
	   $(document).ready(function() {
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    });

    function addMoreFiles() {
        const newFileInput = `
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>File Name:</label>
                    <input type="text" class="form-control" placeholder="Enter file name">
                </div>
                <div class="form-group col-md-6">
                    <label>Upload File:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input">
                        <label class="custom-file-label">Choose file</label>
                    </div>
                </div>
            </div>`;
        $('#fileUploadContainer').append(newFileInput);

        // Reattach event listener to new inputs
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });
    }
	  
	  </script>
	    <script src="js/notifi.js"></script>
   
</body>
</html><?php /**PATH D:\xampp\htdocs\entelyglobal\resources\views/layouts/app.blade.php ENDPATH**/ ?>