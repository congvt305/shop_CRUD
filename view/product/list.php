<div class="container">
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <a href="?page=search&keyword="><button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button></a>
    </form>

    <a href="?page=add"><input type="button" value="Add Product" class="btn btn-primary"></a>

    <div class="row">
        <div class="col-12 col-12">
            <div class="row">
                <table class="table table-dark">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Product Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>

                    </thead>
                    <?php foreach ($products as $key => $product): ?>
                        <tr>
                            <th scope="row"><?php echo ++$key; ?></th>
                            <th><?php echo $product->getProductName(); ?></th>
                            <th><?php echo $product->getProductType(); ?></th>
                            <th><a href="?page=edit&id=<?php echo $product->getProductCode() ?>" class="btn btn-warning">Edit</a>
                            </th>
                            <th><a href="?page=delete&id=<?php echo $product->getProductCode() ?>"
                                   onclick="return confirm('Delete this product?')" class="btn btn-danger">Delete</a></th>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>
</div>
