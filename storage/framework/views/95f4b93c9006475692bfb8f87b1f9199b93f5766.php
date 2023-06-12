

<?php $__env->startSection('content'); ?>

<body>
  <h1 class="text-center mb-4"> Edit Data Pegawai </h1>

  <div class="container">
   
    <div class="row justify-content-center">
      <div class="col-8">
          <div class="card">
              <div class="card-body">
                  <form action="/updatedata/<?php echo e($data->id); ?>" method="POST" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" value="<?php echo e($data->name); ?>">
                      </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Gender</label>
                      <select class="form-select" name="gender" aria-label="Default select example">
                          <option selected>"<?php echo e($data->gender); ?>"</option>
                          <option value="Male">Male</option>
                          <option value="Female">Female</option>
                        </select>
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">No Telp</label>
                  <input type="number" name="notelp" class="form-control" id="exampleInputEmail1" 
                  aria-describedby="emailHelp" value="<?php echo e($data->notelp); ?>">
                </div>
            
      
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
              </div>
          </div>
      </div>
    </div>
  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\applications\jpbooks\resources\views/tampildata.blade.php ENDPATH**/ ?>