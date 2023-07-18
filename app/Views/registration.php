<!doctype html>
<html lang="en">

<head>
    <title>Codeigniter 4 Form Validation Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- select2 -->
    <link href="<?= base_url() ?>css/select2.min.css" rel="stylesheet" />
    <script src="<?= base_url() ?>js/select2.min.js"></script>

</head>

<body>
    <div class="container py-4">
        <?php $validation =  \Config\Services::validation(); ?>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                <form method="POST" action="<?= base_url('user') ?>" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- display flash data message -->
                    <?php
                    if (session()->getFlashdata('success')) : ?>
                        <div class="alert alert-success alert-dismissible">
                            <?php echo session()->getFlashdata('success') ?>
                        </div>
                    <?php elseif (session()->getFlashdata('failed')) : ?>
                        <div class="alert alert-danger alert-dismissible">
                            <?php echo session()->getFlashdata('failed') ?>
                        </div>
                    <?php endif; ?>

                    <div class="card shadow">
                        <div class="card-header">
                            <h5 class="card-title">Register User</h5>
                        </div>

                        <div class="card-body p-4">

                            <div class="form-group mb-3 has-validation">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control <?php if ($validation->getError('name')) : ?>is-invalid<?php endif ?>" name="name" placeholder="Name" value="<?php echo set_value('name'); ?>" />
                                <?php if ($validation->getError('name')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('name') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control <?php if ($validation->getError('email')) : ?>is-invalid<?php endif ?>" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>" />
                                <?php if ($validation->getError('email')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('email') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control <?php if ($validation->getError('password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" />
                                <?php if ($validation->getError('password')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control <?php if ($validation->getError('confirm_password')) : ?>is-invalid<?php endif ?>" name="confirm_password" placeholder="Confirm Password" value="<?php echo set_value('confirm_password'); ?>" />
                                <?php if ($validation->getError('confirm_password')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('confirm_password') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Posisi Anda</label>
                                <select class="form-select <?php if ($validation->getError('jabatan')) : ?>is-invalid<?php endif ?>" aria-label="Default select example" name="jabatan">
                                    <option selected>Pilih Jabatan</option>
                                    <?php foreach ($jabatan as $j) : ?>
                                        <option value="<?= $j['id_jabatan'] ?>"><?= $j['name'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if ($validation->getError('jabatan')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('jabatan') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Skill Anda</label>
                                <br>
                                <select class="js-example-basic-multiple <?php if ($validation->getError('skill')) : ?>is-invalid<?php endif ?>" multiple="multiple" name="skill[]" id="skill[]" style="width: 100%">
                                    <?php foreach ($skill as $s) : ?>
                                        <option value="<?= $s['name'] ?>"><?= $s['name'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if ($validation->getError('skill')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('skill') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Phone</label>
                                <input type="text" class="form-control <?php if ($validation->getError('phone')) : ?>is-invalid<?php endif ?>" name="phone" placeholder="Phone" value="<?php echo set_value('phone'); ?>" />
                                <?php if ($validation->getError('phone')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('phone') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Address</label>
                                <textarea class="form-control <?php if ($validation->getError('address')) : ?>is-invalid<?php endif ?>" name="address" placeholder="Address"><?php echo set_value('address'); ?></textarea>
                                <?php if ($validation->getError('address')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('address') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Negara Anda</label>
                                <select class="form-select <?php if ($validation->getError('country')) : ?>is-invalid<?php endif ?>" aria-label="Default select example" name="country" onchange="fetchStateData(this.value)">
                                    <option selected>Pilih negara</option>
                                    <?php foreach ($country as $d) : ?>
                                        <option value="<?= $d['id_country'] ?>"><?= $d['name'] ?> </option>
                                    <?php endforeach; ?>
                                </select>
                                <?php if ($validation->getError('country')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('country') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">kota Anda</label>
                                <select class="form-select <?php if ($validation->getError('city')) : ?>is-invalid<?php endif ?>" aria-label="Default select example" name="city" id="city" onchange="fetchDistrictData(this.value)">
                                    <!-- option -->
                                </select>
                                <?php if ($validation->getError('city')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('city') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group mb-3">
                                <label class="form-label">Distrik Anda</label>
                                <select class="form-select <?php if ($validation->getError('district')) : ?>is-invalid<?php endif ?>" aria-label="Default select example" name="district" id="district">
                                    <!-- option -->
                                </select>
                                <?php if ($validation->getError('district')) : ?>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('district') ?>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label class="form-label">Sampul</label>
                                <div class="form-group">
                                    <img src="/img/default.jpg" class="img-thumbnail img-preview">
                                </div>
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="form-control <?php if ($validation->getError('sampul')) : ?>is-invalid<?php endif ?>" id="sampul" name="sampul" onchange="previewImg()">
                                        <?php if ($validation->getError('sampul')) : ?>
                                            <div class="invalid-feedback">
                                                <?= $validation->getError('sampul') ?>
                                            </div>
                                        <?php endif; ?>
                                        <label class="custom-file-label" for="sampul">Pilih Gambar....</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(".js-example-basic-multiple").select2({
            placeholder: "Select a Skill"
        });

        function fetchStateData(countryID) {
            $.ajax({
                url: "<?php echo base_url("state") ?>",
                method: "POST",
                data: {
                    cId: countryID
                },
                success: function(result) {
                    let data = JSON.parse(result);

                    let output = "";
                    for (let row in data) {
                        output += `<option value="${data[row].id_city}">${data[row].name}</option>`;
                        console.log(data[row].id_city);
                        console.log(data[row].name);
                    }

                    document.querySelector('#city').innerHTML = output;

                }
            });
        }

        function fetchDistrictData(stateID) {
            $.ajax({
                url: "<?php echo base_url("district") ?>",
                method: "POST",
                data: {
                    sId: stateID
                },
                success: function(result) {
                    let data = JSON.parse(result);

                    let output = "";
                    for (let row in data) {
                        output += `<option value="${data[row].id_district}">${data[row].name}</option>`;
                        console.log(data[row].id_district);
                        console.log(data[row].name);
                    }

                    document.querySelector('#district').innerHTML = output;

                }
            });
        }

        function previewImg() {
            const sampul = document.querySelector('#sampul');
            const sampulLabel = document.querySelector('.custom-file-label');
            const imgPreview = document.querySelector('.img-preview');

            sampulLabel.textContent = sampul.files[0].name;

            const fileSampul = new FileReader();
            fileSampul.readAsDataURL(sampul.files[0]);

            fileSampul.onload = function(e) {
                imgPreview.src = e.target.result;
            }
        }
    </script>
</body>

</html>