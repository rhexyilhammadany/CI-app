<div class="container">
    <h3 class="mt-3">List of Peoples</h3>

    <div class="row mb-3">
        <div class="col-md-5">
            <form action="<?= base_url('peoples/index'); ?>" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Keyword" name="keyword" id="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10">
            <h5>Result : <?= $total_rows; ?></h5>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (empty($peoples)) : ?>
                    <tr>
                        <td colspan="4">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                Data peoples <strong>not found.</strong>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </td>
                    </tr>
                    <?php endif; ?>
                    <?php foreach ($peoples as $people) : ?>
                    <tr>
                        <td><?= ++$start; ?></td>
                        <td><?= $people['name']; ?></td>
                        <td><?= $people['email']; ?></td>
                        <td>
                            <a href="" class="badge badge-warning">detail</a>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>