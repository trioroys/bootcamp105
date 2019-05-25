<?php
include 'connection.php';

$db = new con();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soal No 6</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
    <div class="row">
        <div class="col-md-12"><h2 style="color: orange;font-weight: bold;text-align: center;">Form Input Programmer</h2><br>
            <div class="panel panel-primary" data-collapsed="0">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                        </div>
                        <div class="col-md-6">
                            <form action="inputusers.php" method="POST">
                                <label class="control-label" for="jumlah_awal">Tambah Programmer</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="name">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-warning">Add</button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr />
                    <?php
                    $row = $db->ambilUsers();

                    foreach($row as $data) {
                        $skills = $db->ambilSkills($data['id']);
                        ?>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td style="width: 25%;"><?= $data['name'] ?></td>
                                    <td rowspan="2">
                                        <form action="inputskill.php" method="POST">
                                            <label class="control-label" for="jumlah_awal">Tambah Skill</label>
                                            <div class="input-group">
                                                <input type="hidden" name="user_id" value="<?= $data['id'] ?>">
                                                <input type="text" name="name" class="form-control">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-warning">Add</button>
                                                </span>
                                            </div>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td><?= $skills ?></td>
                                </tr>
                            </tbody>
                        </table>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</body>

</html>