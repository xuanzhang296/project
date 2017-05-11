
<?php $__env->startSection('content'); ?>

<div class="crumb_warp">
    
    <i class="fa fa-home"></i> <a href="#">home</a> &raquo; change password
</div>

<div class="result_wrap">
    <div class="result_title">
        <h3>change password</h3>
         <?php if(count($errors)>0): ?>
         <div  class = "mark">
         <?php if(is_object($errors)): ?>
          <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
             <?php echo e($error); ?>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
         <?php else: ?>
             <?php echo e($errors); ?>

         <?php endif; ?>  
         </div>
             
        <?php endif; ?>
    </div>
    
</div>

<div class="result_wrap">
    <form method="post" action = "" >
        <?php echo e(csrf_field()); ?>


        <table class="add_tab">
            <tbody>
            <tr>
                <th width="200"><i class="require">*</i>Original Password：</th>
                <td>
                    <input type="password" name="password_o"> </i>Old Password</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>New Password：</th>
                <td>
                    <input type="password" name="password"> </i>6-20 characters</span>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>New Password Confirmation：</th>
                <td>
                    <input type="password" name="password_confirmation"> </i>type new password again</span>
                </td>
            </tr>
            <tr>
                <th> 
                </th>
                <td>
                    <input type="submit" value="update">
                    <input type="button" class="back" onclick="history.go(-1)" value="back">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>