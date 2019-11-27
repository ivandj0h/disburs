<?php require_once APPROOT . '/src/views/include/header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h3>Create Disbursement</h3>
            <form method="post" action="/public/save">
                <div class="form-group">
                    <label for="bank_code">Bank Code </label>
                    <input type="text" class="form-control" value="bni" id="bank_code" name="bank_code" placeholder="Bank code">
                </div>
                <div class="form-group">
                    <label for="account_number">Account Number</label>
                    <input type="text" class="form-control" value="1234567890" id="account_number" name="account_number" placeholder="Account Number">
                </div>

                <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="text" class="form-control" value="10000" id="amount" name="amount" placeholder="Amount">
                </div>
                <div class="form-group">
                    <label for="remark">Remark</label>
                    <input type="text" class="form-control" value="bsample remarkni" id="remark" name="remark" placeholder="Remark">
                </div>

                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            </form>
        </div>
    </div>

    <?php require_once APPROOT . '/src/views/include/footer.php'; ?>
</div>