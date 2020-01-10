<div class="container">
    <div class="row">
        <div class="col-12 col-12">
            <h2>Cập nhật thông tin mặt hàng</h2>
            <form method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="product_name" value="<?php echo $product['product_name']; ?>" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <textarea name="product_type" class="form-control"><?php echo $product['product_type']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <textarea name="product_price" class="form-control"><?php echo $product['product_price']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>quantity</label>
                    <textarea name="product_quantity" class="form-control"><?php echo $product['product_quantity']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea name="product_desc" class="form-control"><?php echo $product['product_desc']; ?></textarea>
                </div>
                <div class="form-group">
                    <a href="index.php?page=edit&id=<?php echo $product['product_code'] ?>"><input type="submit" value="Update" class="btn btn-primary"/></a>
                    <a href="index.php" class="btn btn-default">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>