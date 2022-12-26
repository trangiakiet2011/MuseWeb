<?php
include('header.php')
?>

<div class="section-p1" style="margin:10rem" >
    <table>
        <tr>
            <td>
                <h1>ID</h1>
            </td>
            <td>
                <h3><?php echo $_SESSION['id'] ?></h3>
            </td>
        </tr>
        <tr>
            <td>
                <h1>Tên</h1>
            </td>
            <h3>
                <td><?php echo $_SESSION['name'] ?></td>
            </h3>
        </tr>

        <tr>
            <td>
                <h1>Email</h1>
            </td>
            <td>
                <h3><?php echo $_SESSION['user_name'] ?></h3>
            </td>
        </tr>


    </table>
</div>

<?php
include('footer.php')
?>