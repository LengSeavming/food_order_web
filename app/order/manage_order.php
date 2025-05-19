<?php 
    include("../order/menu.php");
    include(__DIR__ . '/../connection.php');
?>

<div class="main-contant">
    <div class="wrapper">
        <h1>Manage Order</h1>

        <br>
            <!-- button to add admin -->
             
             <br><br>
            <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Full Name</th>
                    <th>User Name</th>
                    <th>Active</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Savann</td>
                    <td>Chorn savann</td>
                    <td>
                        <a href="" class="btn-secondary">Update Admin</a>
                        <a href="" class="btn-danger">Delete Admin</a>
                
                    </td>

                </tr>
                <tr>
                    <td>2.</td>
                    <td>Phally</td>
                    <td>Bunthouen phally</td>
                    <td>
                    <a href="" class="btn-secondary">Update Admin</a>
                    <a href="" class="btn-danger">Delete Admin</a>
                    </td>

                </tr>
                <tr>
                    <td>3.</td>
                    <td>Tola</td>
                    <td>Sorn Tola</td>
                    <td>
                    <a href="" class="btn-secondary">Update Admin</a>
                    <a href="" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Visal</td>
                    <td>Yun Sokvisal</td>
                    <td>
                    <a href="" class="btn-secondary">Update Admin</a>
                    <a href="" class="btn-danger">Delete Admin</a>
                    </td>
                </tr>
            </table>
    </div>
   
</div>

<?php include("../footer_page/footer.php") ?>