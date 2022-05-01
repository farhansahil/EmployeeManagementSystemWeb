<link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css">

<section class="px-4 pt-5 mt-4 sec-main my-container">

    <div class="container py-4">


        <!-- Task Card -->
        <div class=" shadow-sm card-task p-3">
            <h4>List of Employees</h4>

            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Sevarth ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Organization ID</th>
                        <th scope="col">Department ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <?php if (!empty($employee_for_verification_from_hod)) {foreach ($employee_for_verification_from_hod as $employees) {?>

                        <th scope="row"><?php echo $employee_for_verification_from_hod['sevarth_id'] ?></th>
                        <td><?php echo $employee_for_verification_from_hod['name'] ?></td>
                        <td><?php echo $employee_for_verification_from_hod['org_id'] ?></td>
                        <td><?php echo $employee_for_verification_from_hod['dept_id'] ?></td>
                        <?php }} ?>

                    </tr>
                  
                </tbody>
            </table>
        </div>


    </div>

  
</section>